let solution = Math.floor(Math.random() * 100) + 1;
        let nombreEssais = 0;

        $(document).ready(function () {
            $('#form').submit(function (event) {
                event.preventDefault();
                let proposition = Number($('#number').val());

                if (proposition === solution) {
                    $('#message').html('Bravo, la solution est ' + solution + '. Vous avez trouvé en ' + nombreEssais + ' essai(s)');
                } else if (proposition < solution) {
                    nombreEssais++;
                    $('#message').html(proposition + ' est trop petit');
                } else if (proposition > solution) {
                    nombreEssais++;
                    $('#message').html(proposition + ' est trop grand');
                }
                if (nombreEssais === 7) {
                    $('#message').html('Vous avez perdu ! La solution était ' + solution);
                }
            });
        });