const { useState } = React;

function MeinComponent() {
  const [count, setCount] = useState(0);

  return (
    <div>
      <p>Du hast {count} mal geklickt</p>
      <button onClick={() => setCount(count + 1)}>Klick mich</button>
    </div>
  );
}

ReactDOM.render(<MeinComponent />, document.getElementById("root"));
