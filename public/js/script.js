function previewImageEditModal() {
    const fileInput = event.target;
    const previewImage = document.getElementById('frameEditModal');

    if (fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewImage.style.display = 'block';
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}

function previewImage() {
    frame.src = URL.createObjectURL(event.target.files[0]);
}
function clearImage() {
    document.getElementById('foto-produto-form').value = null;
    frame.src = "";
}