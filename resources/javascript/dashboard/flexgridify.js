import FlexGridify from "@flexgridify";

const flexGridify = new FlexGridify("#flexGridify", {
    enableResponsiveLayout: true,
    enableDragAndDrop: true,
    dragAndDropSelector: ".drag-handler",
    columnBreakpoints: {
        1200: 2,
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