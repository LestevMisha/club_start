
// Function to format dates in English/Russian
export default function formatDateByLocale(dateString, locale) {
    return new Intl.DateTimeFormat(locale === 'en' ? 'en-EN' : 'ru-RU', {
        timeZone: 'Europe/Moscow',
        day: 'numeric',
        month: 'short',
        hour12: false
    }).format(new Date(dateString)).trim();
}
