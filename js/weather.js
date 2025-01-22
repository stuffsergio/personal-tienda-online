const apiKey = '19762c1305b9898fe35eb16428d4dd12 '; // Reemplaza con tu clave API
    const weatherForm = document.getElementById('weatherForm');

    weatherForm.addEventListener('submit', async (event) => {
      event.preventDefault(); // Evitar el comportamiento por defecto del formulario
                              // Evitamos que se recargue la página

      const city = document.getElementById('city').value.trim(); //


      const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`;

      try {
        const response = await fetch(url);
        if (!response.ok) {
          throw new Error('Ciudad no encontrada o error en la solicitud.');
        }

        const data = await response.json();
        const temp = data.main.temp;
        const description = data.weather[0].description;

        alert(`La temperatura en ${city} es ${temp}°C con ${description}.`);
      } catch (error) {
        alert(`Error: ${error.message}`); // Envía el throw new Error, completando el error.message declarado
      }
    });