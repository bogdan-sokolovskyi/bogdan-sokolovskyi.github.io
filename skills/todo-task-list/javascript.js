'use strict';

let taskListParent = document.querySelector('#todoList');
let filterByProjects = document.querySelector('#filterByProjects');
let items = JSON.parse(localStorage.getItem('TodoList')) || [
		{
			projectTitleName: 'Задача 1',
			projectTitleVal: 'project-1',
			projectTitlePriority: 2,
			projectTitleDescr: '1. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		},
		{
			projectTitleName: 'Задача 2',
			projectTitleVal: 'project-1',
			projectTitlePriority: 1,
			projectTitleDescr: '2. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		},
		{
			projectTitleName: 'Задача 3',
			projectTitleVal: 'project-2',
			projectTitlePriority: 3,
			projectTitleDescr: '3. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		},
		{
			projectTitleName: 'Задача 4',
			projectTitleVal: 'project-3',
			projectTitlePriority: 4,
			projectTitleDescr: '4. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		},
		{
			projectTitleName: 'Задача 5',
			projectTitleVal: 'project-2',
			projectTitlePriority: 4,
			projectTitleDescr: '5. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		},
		{
			projectTitleName: 'Задача 6',
			projectTitleVal: 'project-1',
			projectTitlePriority: 1,
			projectTitleDescr: '6. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		},
		{
			projectTitleName: 'Задача 7',
			projectTitleVal: 'project-3',
			projectTitlePriority: 2,
			projectTitleDescr: '7. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		},
		{
			projectTitleName: 'Задача 8',
			projectTitleVal: 'project-3',
			projectTitlePriority: 3,
			projectTitleDescr: '8. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		},
		{
			projectTitleName: 'Задача 9',
			projectTitleVal: 'project-2',
			projectTitlePriority: 1,
			projectTitleDescr: '9. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		},
		{
			projectTitleName: 'Задача 10',
			projectTitleVal: 'project-1',
			projectTitlePriority: 3,
			projectTitleDescr: '10. Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.'
		}
	];
let selectOptions = JSON.parse(localStorage.getItem('SelectOptions')) || [
		{
			option: 'все',
		},
		{
			option: 'project-1',
		},
		{
			option: 'project-2',
		},
		{
			option: 'project-3',
		}
	];


function createList(list = [], listTarget) {
	listTarget.innerHTML = list.map((item, i) => {
		return `<li class="task">
    	<h2>${item.projectTitleName}</h2>
		<div class="task-block">
			<div class="project">
				Проект: <a href="#">${item.projectTitleVal}</a>
			</div>
			<div class="priority">
				Приоритет: <span>${item.projectTitlePriority}</span>
			</div>
		</div>
		</div>
		<p class="description">${item.projectTitleDescr}</p>
		<div class="buttons">
			<div class="button-block">
				<button class="edit">Изменить</button>
			</div>
			<div class="button-block">
				<button class="task-close" data-index="${i}">Закрыть</button>
			</div>
			<div class="button-block">
				<button class="collapse-toggle">Развернуть</button>
			</div>
		</div>
    </li>`
	}).join('');
}

function createOptions(options = [], listOption){
	listOption.innerHTML = options.map((item) => {
		return `<option value="${item.option}">${item.option}</option>`
	}).join('');
}

function saveTodos() {
	localStorage.setItem('TodoList', JSON.stringify(items));
	createList(items, taskListParent);
}

function saveSelectOptions(){
	localStorage.setItem('SelectOptions', JSON.stringify(selectOptions));
	createOptions(selectOptions, filterByProjects);
}

saveTodos();
saveSelectOptions();


let edit = document.querySelectorAll('.edit');
let taskClose = document.querySelectorAll('.task-close');
let collapseToggle = document.querySelectorAll('.collapse-toggle');
let task = document.querySelectorAll('.task');
let newTask = document.querySelector('#newTask');
let form = document.querySelector('.form');
let controls = document.querySelector('#controls');
let sortTasks = document.querySelector('#sortTasks');
let inputTaskTitle = document.querySelector('#taskTitle');
let inputProjectTitle = document.querySelector('#projectTitle');
let selectPriority = document.querySelector('#priority');
let textareaDescription = document.querySelector('#taskDescription');
let $taskListDefault;
let formDataTaskID;
let generateTaskId;


//Находим родительский класс(closest)
function findParentClass (el, cls) {
	while ((el = el.parentElement) && !el.classList.contains(cls));
	return el;
}

for(let i = 0; i < taskListParent.children.length; i++){
	generateTaskId = i;
	taskListParent.children[i].setAttribute('id', 'task' + generateTaskId);
}

function selectCompare(){
	let compareProject = [];
	let compareLocalStorage = [];
	for(let j = 0; j < task.length; j++){
		compareProject.push(task[j].querySelector('.project a').textContent.toLowerCase());
	}
	for(let i = 0; i < filterByProjects.length; i++){
		compareLocalStorage.push(filterByProjects[i].value.toLowerCase());
	}

	compareLocalStorage = compareLocalStorage.filter(function(e){
		return ~compareProject.indexOf(e);
	});
	compareLocalStorage.unshift('все');

	selectOptions = selectOptions.map(function(name, i) {
		if(compareLocalStorage[i] == undefined) return {'option' : ''};
		return {'option' : compareLocalStorage[i]};
	});
	saveSelectOptions();
}
selectCompare();

function compareEdit(){
	let projectTitleName = inputTaskTitle.value;
	let projectTitleVal = inputProjectTitle.value;
	let projectTitlePriority = selectPriority.value;
	let projectTitleDescr = textareaDescription.value;
	let option = projectTitleVal.toLowerCase();
	let newProjectIndicator = false;
	let projectTitleLow = projectTitleVal.toLowerCase();
	let optionAppend = document.createElement('option');
	optionAppend.setAttribute('value', projectTitleLow);
	optionAppend.innerHTML = projectTitleVal;

	let todo = {
		projectTitleName,
		projectTitleVal,
		projectTitlePriority,
		projectTitleDescr
	};
	let optionTodo = {
		option
	};

	function checkSelectOption() {
		for(let i = 0; i < filterByProjects.children.length; i++){
			if(filterByProjects.children[i].value == projectTitleLow){
				return newProjectIndicator = true;
			}
		}
	}

	for(let i = 0; i < taskListParent.children.length; i++){
		if(taskListParent.children[i].id == formDataTaskID){
			let index = formDataTaskID.match(/\d+/);

			items.splice(index, 1, todo);
			saveTodos();

			checkSelectOption();
			if(!newProjectIndicator){
				selectOptions.push(optionTodo);
				saveSelectOptions();
			}
			document.location.reload();
			return;
		}
	}

	items.push(todo);
	saveTodos();

	checkSelectOption();
	if(!newProjectIndicator){
		selectOptions.push(optionTodo);
		saveSelectOptions();
	}
	document.location.reload();
}

// Добавить новую задачу
newTask.addEventListener('click', function () {
	let maxId, newId;
	let selectReset = Array.from(form.querySelector('select').children);

	function taskCount() {
		let idList = [];

		for(let i = 0; i < task.length; i++ ){
			idList.push(task[i].getAttribute('id').match(/\d+/));
		}

		maxId = Math.max.apply(Math, idList);
		newId = 'task' + (maxId);
		return newId;
	}
	controls.setAttribute('style', 'display:none');
	taskCount();
	form.classList.add('new');
	form.setAttribute('data-task-id', newId);
	form.setAttribute('style', 'display:block');
	for(let i = 0; i < form.querySelectorAll('input').length; i++){
		form.querySelectorAll('input')[i].setAttribute('value', '');
	}

	for(let i = 0; i < selectReset.length; i++){
		if(selectReset[i].value !== ''){
			selectReset[i].removeAttribute('selected');
		}else{selectReset[i].removeAttribute('disabled');}
	}

	form.querySelector('textarea').textContent = '';
});

// Сортируем задачи
sortTasks.addEventListener('focus', function (e) {
	let self = e.currentTarget;

	if (!(self.checked)) {
		$taskListDefault = taskListParent.querySelectorAll('li');
	}
});
sortTasks.addEventListener('change', function(e){
	let self = e.currentTarget;
	let taskArr = Array.from(task);

	if (self.checked) {
		taskArr.sort(function(first, second) {
			let a = first.querySelector('.priority span').textContent;
			let b = second.querySelector('.priority span').textContent;
			return a - b;
		});

		for(let i = 0; i < taskArr.length; i++){
			taskListParent.append(taskArr[i]);
		}
	} else {
		for(let i = 0; i < $taskListDefault.length; i++){
			taskListParent.append($taskListDefault[i]);
		}
	}
});

// Фильтруем список
filterByProjects.addEventListener('change', function(e){
	let self = e.currentTarget;
	let selected = self.value;
	let tasksArr = [];

	for(let i = 0; i < task.length; i++ ){
		tasksArr.push(task[i]);
		task[i].setAttribute('style', 'display:none');
	}

	for (let i = 0; i < tasksArr.length; i++) {
		let elems_find = Array.from(tasksArr[i].querySelectorAll('.project a'));
		let elems_project = elems_find[0].textContent.toLowerCase();

		function showTasks() {
			return tasksArr[i].setAttribute('style', 'display:block');
		}

		if (selected === elems_project) {
			showTasks();
		} else if (selected === 'все') {
			showTasks();
		}
	}

});

//Отправка формы
form.addEventListener('submit', function (e) {
	e.preventDefault();
	let self = e.currentTarget;

	compareEdit();

	//Закрыть форму
	self.setAttribute('style', 'display: none');
	self.classList.remove('edit');
	self.setAttribute('data-task-id', '');
	controls.setAttribute('style', 'display: block');
});

// Отмена и закрытие формы
form.addEventListener('reset', function (e) {
	let self = e.currentTarget;
	self.setAttribute('style', 'display: none');
	self.classList.remove('edit');
	self.setAttribute('data-task-id', '');
	controls.setAttribute('style', 'display: block');
});

// Редактируем задачу
for(let item of edit) {
	item.addEventListener('click', function (e) {
		let self = e.currentTarget;
		let thisTask = findParentClass(self, 'task');
		let thisTaskId = thisTask.getAttribute('id');
		let taskTitle = thisTask.querySelector('h2').textContent;
		let projectTitle = thisTask.querySelector('.project a').textContent;
		let taskPriorityVal = thisTask.querySelector('.priority span').textContent;
		let taskDescription = thisTask.querySelector('.description').textContent.trim();

		controls.setAttribute('style', 'display:none');

		form.setAttribute('style', 'display:block');
		form.classList.add('edit');
		form.setAttribute('data-task-id', thisTaskId);
		formDataTaskID = form.getAttribute('data-task-id');
		inputTaskTitle.setAttribute('value', taskTitle);
		inputProjectTitle.setAttribute('value', projectTitle);
		for (let i = 0; i < selectPriority.children.length; i++) {
			if (selectPriority.children[i].value == taskPriorityVal) {
				selectPriority.children[i].setAttribute('selected', 'selected');
			}
		}
		textareaDescription.textContent = taskDescription;
	});
}

// Закрыть задачу
for(let item of taskClose){
	item.addEventListener('click', function (e) {
		if(!e.target.matches('button')) return;
		const el = e.target;
		const index = el.dataset.index;
		items.splice(index, 1);
		saveTodos();
		document.location.reload();
	});
}

// Свернуть или развернуть описание задачи
for(let item of collapseToggle){
	item.addEventListener('click', function (e) {
		let self = e.currentTarget;
		let thisTask = findParentClass(self, 'task');
		if (thisTask.classList.contains('selected')) {
			self.textContent = 'Развернуть';
			thisTask.classList.remove('selected');
		} else {
			self.textContent = 'Свернуть';
			thisTask.classList.add('selected');
		}
	});
}
