function clearInputs() {
	const inputs = document.querySelectorAll("input");
	inputs.forEach((input) => {
		input.value = "";
	});
	document.querySelector("#save").value = "+ Save";
	document.querySelector("#clear").value = "Clear";
}
// function validation() {
// 	let marks = document.querySelector("#std_total_marks").value;
// 	alert(marks);
// }
