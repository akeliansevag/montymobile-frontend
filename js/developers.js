function copyToClipboard(elementId, btn) {
    const codeBlock = document.getElementById(elementId);
    const text = codeBlock.innerText;

    // Find the "Copied!" element inside the button
    const copiedTextEl = btn.querySelector('.copied-text');

    // Optionally store original text element (if needed)
    navigator.clipboard.writeText(text).then(() => {
        if (copiedTextEl) {
            copiedTextEl.classList.remove('invisible');
        }

        setTimeout(() => {
            if (copiedTextEl) {
                copiedTextEl.classList.add('invisible');
            }
        }, 2000);
    });
}