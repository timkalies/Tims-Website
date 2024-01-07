import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';

function Clock() {
  const [currentTime, setCurrentTime] = useState(new Date());

  useEffect(() => {
    const intervalId = setInterval(() => {
      setCurrentTime(new Date());
    }, 1000);

    // Aufräumarbeiten, wenn die Komponente unmontiert wird oder der Effekt neu gerendert wird
    return () => clearInterval(intervalId);
  }, []); // Das leere Array stellt sicher, dass der Effekt nur einmal beim Mounten ausgeführt wird

  const formattedTime = currentTime.toLocaleTimeString();

  return (
    <p>{formattedTime} Uhr</p>
  );
}

const myFirstElement = <img src="Bilder/U20DM.png" alt="Mein erstes React Element" />;
const clockElement = <Clock />;

ReactDOM.render(myFirstElement, document.getElementById('galerie'));
ReactDOM.render(clockElement, document.getElementById('time'));