import getCSRFToken from "../helpers/get-CSRF-token.mjs";

export default async function postRequest(url, contentType, parameters = {}, loader = null) {
    loader?.classList.add("modern-loader_active");

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                "X-CSRF-TOKEN": getCSRFToken(),
                'Content-Type': contentType,
            },
            body: new URLSearchParams(parameters),
        });

        if (response?.redirected) return window.location.replace(response.url);
        if (!response.ok) throw new Error(`${response.status}: ${response.statusText}`);

        const data = await response.json();
        if (data?.message) return window.message(data.message, 10);

        return data;
    } catch (error) {
        console.error("Request failed:", error);
        throw error;
    } finally {
        loader?.classList.remove("modern-loader_active");
    }
};
