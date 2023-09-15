
    const h1 = document.getElementById('my-h1');
        const colors = ['red', 'green', 'blue', 'yellow'];

        function changeColor() {
            h1.style.color = colors[Math.floor(Math.random() * colors.length)];
        }

        setInterval(changeColor, 1000);
