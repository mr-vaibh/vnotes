console.log('Welcome User !!');

// Letting all necessary variables
let addBtn = document.getElementById('addBtn');
let addTxt = document.getElementById("addTxt");
let addTitle = document.getElementById("addTitle");
let searchTxt = document.getElementById("searchTxt");


// Calling the necessary functions
checkBtn();
showNotes();

// Function to check if textarea has input or not
function checkBtn() {
	if (addTxt.value == '') {
		addBtn.disabled = true;
		// console.log('disabled', addBtn.disabled);
	} else {
		addBtn.disabled = false;
		// console.log('enabled', addBtn.disabled);
	}
}

// If user adds a note, add it to the localStorage
addBtn.addEventListener('click', function (e) {

	let notes = localStorage.getItem("notes");

	if (notes == null) {
		notesObj = [];
	} else {
		notesObj = JSON.parse(notes);
	}
	let Obj = {
		title: addTitle.value,
		text: addTxt.value,
		date: new Date().toLocaleDateString('en-GB'),
		time: new Date().toLocaleTimeString(),
	};
	notesObj.push(Obj);
	localStorage.setItem("notes", JSON.stringify(notesObj));
	addTxt.value = "";
	addTitle.value = "";
	// console.log(notesObj);

	showNotes();
	checkBtn();
});


// Function to show notes from localStorage

function showNotes() {
	let notes = localStorage.getItem("notes");

	if (notes == null) {
		notesObj = [];
	} else {
		notesObj = JSON.parse(notes);
	}

	let html = '';
	notesObj.forEach(function (element, index) {
		html += `
			<div class="card border-dark shadow-lg mb-2 mx-2 noteCard" style="width: 18rem;">
				<div class="card-header h5" id="title${index}"><span>${element.title}</span></div>
				<div class="card-body text-dark">
					<p class="card-text" id="text${index}">${element.text}</p>
				</div>
				<div class="card-footer text-muted">${element.date} at ${element.time}<i class="fa fa-trash float-right" title="Delete this note" id="${index}" onclick="deleteNote(this.id);" style="font-size: 24px;cursor: pointer;"></i> </div>
			</div>
		`;
	});

	let notesElm = document.getElementById('notes');
	if (notesObj.length != 0) {
		notesElm.innerHTML = html;
	} else {
		notesElm.innerHTML = `<p>No notes found, notes will be displayed here once added</p>`;
	}
}


// Function to delete notes from localStorage

function deleteNote(index) {
	// console.log('Deleting notes', index);

	let notes = localStorage.getItem("notes");
	if (notes == null) {
		notesObj = [];
	} else {
		notesObj = JSON.parse(notes);
	}

	notesObj.splice(index, 1);
	localStorage.setItem("notes", JSON.stringify(notesObj));
	showNotes();
}


searchTxt.addEventListener('input', function (e) {
	let inputVal = searchTxt.value.toLowerCase();
	let noteCards = document.getElementsByClassName('noteCard');
	Array.from(noteCards).forEach(function (element) {
		let cardTitle = element.getElementsByTagName('span')[0].innerText;
		let cardTxt = element.getElementsByTagName('p')[0].innerText;
		// console.log(cardTxt);
		if (cardTitle.includes(inputVal) || cardTxt.includes(inputVal)) {
			element.style.display = 'inherit';
		} else {
			element.style.display = 'none';
		}
	})
	
})
