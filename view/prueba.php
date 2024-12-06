<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td,
  th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }

  #app {
    display: flex;
    flex-direction: column;
    width: 100%;
    align-items: center;
    justify-content: center;
  }

  button {
    --bg: #e74c3c;
    --text-color: #fff;
    position: relative;
    width: 150px;
    border: none;
    background: var(--bg);
    color: var(--text-color);
    padding: 1em;
    font-weight: bold;
    text-transform: uppercase;
    transition: 0.2s;
    border-radius: 5px;
    opacity: 0.8;
    letter-spacing: 1px;
    box-shadow: #c0392b 0px 7px 2px, #000 0px 8px 5px;
    margin-top: 35px;
  }

  button:hover {
    opacity: 1;
  }

  button:active {
    top: 4px;
    box-shadow: #c0392b 0px 3px 2px, #000 0px 3px 5px;
  }
</style>
<div id="app">
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Número Contacto</th>
        <th>Apellido</th>
        <th>Fecha cración</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="contact in contacts" :key="contact.id">
        <td>{{contact.id}}</td>
        <td>{{contact.contact_no}}</td>
        <td>{{contact.lastname}}</td>
        <td>{{contact.createdtime}}</td>
      </tr>
    </tbody>
  </table>

  <button @click="getContacts">listar contactos</button>
</div>