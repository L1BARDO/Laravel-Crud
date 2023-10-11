 
    <input type="text" id="filtro" placeholder="Filtrar por columna...">
    <table id="miTabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <!-- PHP para generar más registros -->
            <?php
            $registros = [];
            for ($i = 1; $i <= 10; $i++) {
                $registros[] = ["Usuario $i", rand(18, 60), "Ciudad $i"];
            }

            foreach ($registros as $registro) {
                echo "<tr>";
                echo "<td>{$registro[0]}</td>";
                echo "<td>{$registro[1]}</td>";
                echo "<td>{$registro[2]}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    
    <ul class="pagination" id="pagination"></ul>

    <script>
        const inputFiltro = document.getElementById('filtro');
        const tabla = document.getElementById('miTabla');
        const filas = tabla.getElementsByTagName('tr');
        const porPagina = 5;
        const paginacion = document.getElementById('pagination');
        let paginaActual = 1;

        // Función para mostrar una página específica
        function mostrarPagina(pagina) {
            const inicio = (pagina - 1) * porPagina;
            const fin = inicio + porPagina;

            for (let i = 1; i < filas.length; i++) {
                if (i >= inicio && i < fin) {
                    filas[i].style.display = '';
                } else {
                    filas[i].style.display = 'none';
                }
            }
        }

        // Función para crear los botones de paginación
        function crearBotonesPaginacion() {
            const totalPaginas = Math.ceil((filas.length - 1) / porPagina);

            for (let i = 1; i <= totalPaginas; i++) {
                const li = document.createElement('li');
                const a = document.createElement('a');
                a.href = '#';
                a.textContent = i;
                li.appendChild(a);

                a.addEventListener('click', function () {
                    paginaActual = i;
                    mostrarPagina(paginaActual);
                });

                paginacion.appendChild(li);
            }
        }

        // Mostrar la primera página al cargar
        mostrarPagina(paginaActual);
        // Crear los botones de paginación
        crearBotonesPaginacion();

        inputFiltro.addEventListener('keyup', function () {
            const filtro = inputFiltro.value.toLowerCase();

            for (let i = 1; i < filas.length; i++) {
                const fila = filas[i];
                let coincide = false;

                for (let j = 0; j < fila.cells.length; j++) {
                    const celda = fila.cells[j];
                    if (celda.textContent.toLowerCase().includes(filtro)) {
                        coincide = true;
                        break;
                    }
                }

                if (coincide) {
                    fila.style.display = '';
                } else {
                    fila.style.display = 'none';
                }
            }

            // Volver a la página 1 después de aplicar un filtro
            paginaActual = 1;
            mostrarPagina(paginaActual);
        });
    </script> 
