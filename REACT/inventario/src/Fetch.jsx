import { useState, useEffect } from "react";

function Fetch() {
  const [data, setData] = useState([]);
  const [loading, setLoading] = useState(true);
  const [form, setForm] = useState({ name: "", description: "", unit_price: "", stock: "" });
  const [isEditing, setIsEditing] = useState(false);
  const [editingId, setEditingId] = useState(null);

  const fetchData = () => {
    fetch("http://127.0.0.1:8000/api/productos")
      .then((res) => res.json())
      .then((res) => {
        setData(res.productos); // usa res si Laravel devuelve el array directo
        setLoading(false);
      });
  };

  useEffect(() => {
    fetchData();
  }, []);

  const handleChange = (e) => {
    setForm({ ...form, [e.target.name]: e.target.value });
  };

  const handleSubmit = () => {
    const method = isEditing ? "PUT" : "POST";
    const url = isEditing
      ? `http://127.0.0.1:8000/api/productos/${editingId}`
      : "http://127.0.0.1:8000/api/productos";

    fetch(url, {
      method,
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(form),
    }).then(() => {
      setForm({ name: "", description: "", unit_price: "", stock: "" });
      setIsEditing(false);
      setEditingId(null);
      fetchData();
    });
  };

  const handleEdit = (producto) => {
    setForm({
      name: producto.name,
      description: producto.description,
      unit_price: producto.unit_price,
      stock: producto.stock,
    });
    setIsEditing(true);
    setEditingId(producto.id);
  };

  const handleDelete = (id) => {
    if (confirm("¿Estás seguro de eliminar este producto?")) {
      fetch(`http://127.0.0.1:8000/api/productos/${id}`, {
        method: "DELETE",
      }).then(() => fetchData());
    }
  };

  if (loading) return <p>Cargando...</p>;

  return (
    <>
      <h1>Gestión de Productos</h1>

      <h3>{isEditing ? "Editar Producto" : "Agregar Producto"}</h3>
      <input name="name" placeholder="Nombre" value={form.name} onChange={handleChange} />
      <input name="description" placeholder="Descripción" value={form.description} onChange={handleChange} />
      <input name="unit_price" placeholder="Precio" value={form.unit_price} onChange={handleChange} />
      <input name="stock" placeholder="Stock" value={form.stock} onChange={handleChange} />
      <button onClick={handleSubmit}>{isEditing ? "Actualizar" : "Agregar"}</button>

      <ul>
        {data.map((producto) => (
          <li key={producto.id}>
            <strong>{producto.name}</strong> — {producto.description} — ${producto.unit_price} — Stock: {producto.stock}
            <br />
            <button onClick={() => handleEdit(producto)}>Editar</button>
            <button onClick={() => handleDelete(producto.id)}>Eliminar</button>
          </li>
        ))}
      </ul>
    </>
  );
}

export default Fetch;
