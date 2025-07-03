fetch('officers.json')
  .then(response => {
    if (!response.ok) {
      throw new Error('Failed to load JSON data.');
    }
    return response.json();
  })
  .then(data => {
    const container = document.getElementById('officerCards');
    const officers = data.officers;

    if (officers.length === 0) {
      container.innerHTML = '<p>No officers found.</p>';
      return;
    }

    officers.forEach(officer => {
      const card = document.createElement('div');
      card.className = 'card';

      const img = document.createElement('img');
      img.src = officer.image || 'images/default.jpg';
      img.alt = 'Officer Image';
      card.appendChild(img);

      const name = document.createElement('h3');
      name.textContent = officer.name;
      card.appendChild(name);

      const position = document.createElement('p');
      position.innerHTML = `<strong>Position:</strong> ${officer.position}`;
      card.appendChild(position);

      const grade = document.createElement('p');
      grade.innerHTML = `<strong>Grade:</strong> ${officer.grade}`;
      card.appendChild(grade);

      const bio = document.createElement('p');
      bio.innerHTML = `<strong>Bio:</strong> ${officer.bio.replace(/\n/g, '<br>')}`;
      card.appendChild(bio);

      container.appendChild(card);
    });
  })
  .catch(error => {
    document.getElementById('officerCards').innerHTML = `<p>Error loading data: ${error.message}</p>`;
    console.error('Error:', error);
  });
