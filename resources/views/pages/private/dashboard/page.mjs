import FlexGridify from "@flexgridify";
import Chart from "@chart.js";
import getElement from "@helpers/get-element.mjs";
import formatDateByLocale from "@helpers/format-date-by-locale.mjs";

// FlexGridify Setup
const flexGridify = new FlexGridify("#flexGridify", {
    enableResponsiveLayout: true,
    enableDragAndDrop: true,
    dragAndDropSelector: ".drag-handler",
    columnBreakpoints: {
        620: 2,
    },
    defaultColumnsCount: 1,
    onDragStartChange: (e, childItem) => {
        const childItemRect = childItem.getBoundingClientRect();
        const computedStyle = getComputedStyle(childItem.children[0]);
        const paddingLeft = parseFloat(computedStyle.paddingLeft) || 0;
        const paddingTop = parseFloat(computedStyle.paddingTop) || 0;
        e.dataTransfer.setDragImage(childItem, childItemRect.width - e.offsetX - paddingLeft, e.offsetY + paddingTop);
    }
});

const chartItem = getElement("#js-chart-item");
const visitorData = JSON.parse(chartItem.getAttribute("data-visitor-data"));
const legendLabel = chartItem.getAttribute("data-legend-label");
const locale = chartItem.getAttribute("data-locale");
const labels = visitorData.original.map(row => formatDateByLocale(row.date, locale));
const data = visitorData.original.map(row => row.visit_count);

// Create the chart
const referral_plot = new Chart(
    getElement('#referral_plot'), {
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
);
// Create chart data
const referral_plot_values = new Chart(
    getElement('#referral_plot_values'), {
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
);
