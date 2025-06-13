import './bootstrap';

// Livewire event listeners
document.addEventListener('livewire:load', function () {
    Livewire.on('notify', (data) => {
        alert(data.message);
    });

    Livewire.on('redirect', (url) => {
        window.location.href = url;
    });
});