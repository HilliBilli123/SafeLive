const button__pading = document.querySelectorAll(".button__pading")
const table__content = document.querySelectorAll(".table__content")

button__pading.forEach(elem => {
	elem.addEventListener("click", (e) => {
		button__pading.forEach(removes =>{removes.classList.remove("button__active") })
		table__content.forEach(elems => {
			elems.classList.remove("active")
			if (elems.id == e.target.id) {
				elems.classList.add("active")
				e.target.classList.add("button__active")
			}
		})
	})
})