import FlexGridify from "@flexgridify";
import Chart from "@chart.js";

// 1. FlexGridify Initialization
const flexGridifyOptions = {
    enableSmoothLoading: true,
    enableResponsiveLayout: true,
    enableDragAndDrop: true,
    dragAndDropSelector: ".drag-handler",
    columnBreakpoints: { 620: 2, },
    defaultColumnsCount: 1,
    onDragStartChange: (e, childItem) => setupDragImage(e, childItem),
}

new FlexGridify("#flexGridify", flexGridifyOptions);

// Set up drag image for FlexGridify items
function setupDragImage(e, childItem) {
    const childItemRect = childItem.getBoundingClientRect();
    const computedStyle = getComputedStyle(childItem.children[0]);
    const paddingLeft = parseFloat(computedStyle.paddingLeft) || 0;
    const paddingTop = parseFloat(computedStyle.paddingTop) || 0;
    e.dataTransfer.setDragImage(childItem, childItemRect.width - e.offsetX - paddingLeft, e.offsetY + paddingTop);
}


// 2. Chart.js Data and Configuration
const chartItem = document.querySelector("#js-chart-item");
const visitorData = JSON.parse(chartItem.getAttribute("data-visitor-data"));
const legendLabel = chartItem.getAttribute("data-legend-label");
const locale = chartItem.getAttribute("data-locale");

const labels = visitorData.original.map(row => formatDateByLocale(row.date, locale));
const data = visitorData.original.map(row => row.visit_count);

// Create referral plot
const referralPlotConfig = {
    type: 'bar',
    data: {
        labels: labels, // Use formatted dates
        datasets: [{
            label: legendLabel, // Label in Russian
            data: data,
            backgroundColor: '#0d6efd',
        }]
    },
    options: {
        responsive: false,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    display: false,
                },
                grid: {
                    drawTicks: false,
                }
            }
        }
    }
}
new Chart(document.querySelector('#js-referral-plot'), referralPlotConfig);

// Create referral vlaues data
const referralPlotValuesConfig = {
    type: 'bar',
    data: {
        datasets: [{
            data: data,
        }]
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                top: 32,
                bottom: 44.5
            }
        },
        scales: {
            x: {
                ticks: {
                    display: false,
                },
                grid: {
                    drawTicks: false,
                }
            },
            y: {
                beginAtZero: true,
                afterFit: (ctx) => {
                    ctx.width = 32;
                }
            }
        },
        plugins: {
            legend: {
                display: false,
            }
        }
    },
}
new Chart(document.querySelector('#js-referral-plot-values'), referralPlotValuesConfig);

// Function to format dates in English/Russian
function formatDateByLocale(dateString, locale) {
    return new Intl.DateTimeFormat(locale === 'en' ? 'en-EN' : 'ru-RU', {
        timeZone: 'Europe/Moscow',
        day: 'numeric',
        month: 'short',
        hour12: false
    }).format(new Date(dateString)).trim();
}
