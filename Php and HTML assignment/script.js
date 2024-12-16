<script>
        const doors = document.querySelectorAll('.door');

        doors.forEach(door => {
            door.addEventListener('click', () => {
                const link = door.getAttribute('data-link');
                if (link) {
                    window.location.href = link;
                }
            });
        });
    </script>
</body>