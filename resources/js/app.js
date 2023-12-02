import './bootstrap';


const form = document.querySelector("#form");

const dataForm = async (e) => {
	e.preventDefault()

	const data = {
		name: form.name.value,
		price: form.price.value
	}
	console.log(data)
	fetch("", {
		method: "POST",
		headers: {
			"Content-Type": "application/json"
		},
		body: JSON.stringify(data)
	})
	.
}

form.addEventListener("submit", dataForm);