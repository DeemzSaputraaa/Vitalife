<form action="{{ route('profile.photo.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo" id="photo">
    <button type="submit">Upload</button>
</form>

@if(session('photo'))
    <img src="{{ asset('images/' . session('photo')) }}" alt="Profile Photo">
@endif

<button id="save-button">Save</button>

<div id="preview"></div>

<script>
    const photoInput = document.getElementById('photo');
    const saveButton = document.getElementById('save-button');
    const previewDiv = document.getElementById('preview');

    photoInput.addEventListener('change', () => {
        const file = photoInput.files[0];
        const reader = new FileReader();

        reader.onload = () => {
            const img = document.createElement('img');
            img.src = reader.result;
            previewDiv.innerHTML = '';
            previewDiv.appendChild(img);
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });

    saveButton.addEventListener('click', () => {
        // Add your save logic here
    });
</script>