// Sample data (you can replace this with your own data)
const data = Array.from({ length: 50 }, (_, index) => `Item ${index + 1}`);

const itemsPerPage = 10;
let currentPage = 1;

const dataList = document.getElementById('data-list');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');
const pageNo = document.getElementById('page-no');

function displayData(page) {
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const itemsToDisplay = data.slice(start, end);

    dataList.innerHTML = '';
    itemsToDisplay.forEach((item) => {
        const li = document.createElement('li');
        li.textContent = item;
        dataList.appendChild(li);
    });

    pageNo.textContent = `Page ${page}`;
}

displayData(currentPage);

prevButton.addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        displayData(currentPage);
    }
});

nextButton.addEventListener('click', () => {
    if (currentPage < Math.ceil(data.length / itemsPerPage)) {
        currentPage++;
        displayData(currentPage);
    }
});
