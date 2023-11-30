import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function() {

    $('#mobileMenuOpen').on('click', () => {
        document.getElementById('closedMenu').classList.toggle('hidden')
        document.getElementById('openMenu').classList.toggle('hidden')
        document.getElementById('mobile-menu').classList.toggle('hidden')
    })

    $('.group-menu-category').hover(
        function() {
            $('#menu-category').removeClass('hidden');
            $('#menu-category-tab').removeClass('hidden');
        },
        function() {
            $('#menu-category').addClass('hidden');
        }
    );
});
document.getElementById('menu-item-3').addEventListener('click', () => {
    addParams('asc')
})
document.getElementById('menu-item-4').addEventListener('click', () => {
    addParams('desc')
})
function addParams(value)
{
    insertParam2('price', value)
}
function insertParam2(key, value) {
    key = encodeURIComponent(key);
    value = encodeURIComponent(value);

    var search = window.location.search;
    var kvp = key + "=" + value;

    var regex = new RegExp("(&|\\?)" + key + "=[^\\&]*");

    search = search.replace(regex, "$1" + kvp);

    if (!regex.test(search)) {
        search += (search.length > 0 ? "&" : "?") + kvp;
    }

    console.log(key);
    // Делайте то, что вам нужно здесь

    window.location.search = search;
}
document.addEventListener('DOMContentLoaded', function () {
    var button = document.getElementById("toggle-button");
    var expandIcon = document.querySelector(".expand-icon");
    var collapseIcon = document.querySelector(".collapse-icon");
    var filterSection = document.getElementById("filter-section-1");

// Set initial state
    button.setAttribute("aria-expanded", "false");

    button.addEventListener("click", function () {
        var expanded = button.getAttribute("aria-expanded") === "true";

        // Toggle the aria-expanded attribute
        button.setAttribute("aria-expanded", String(!expanded));

        // Toggle the icons
        expandIcon.classList.toggle("hidden", !expanded);
        collapseIcon.classList.toggle("hidden", expanded);

        // Toggle the filter section visibility
        filterSection.style.display = expanded ? "none" : "block";
    });

    document.getElementById('menu-button-filter').addEventListener('click', () => {
        document.getElementById('menu-filter').classList.toggle('hidden')
    })


    // Функция для отправки данных на сервер с использованием Axios
    function sendDataToServer(data) {
        const headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 'application/json',
            'accept': "Application/json",
        }
        axios.get('/filter', { data }, {
            headers: headers
        })
            .then(response => {
                console.log(response.data);
            })
            .catch(error => {
                // Обработка ошибки
                console.error(error);
            });
    }
});


