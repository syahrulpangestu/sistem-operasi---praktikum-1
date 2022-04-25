$(document).ready(function(){
    const tbody = $('table').find('tbody');
    var rows = [["Power Rangers", 4.5], ["Digimon", 4.0],  ["Handy Many", 5.0], ["Inazuma Eleven", 4.8], ["Kera Sakti", 4.6]];


    rows.forEach(function(item){
    tbody.append('<tr><td>'+item[0]+'</td><td>'+item[1]+'</td><td><button>Delete</button></td></tr>')
    });

    $('.header').on('click',function() {
        var tablecontent = getTableContents('.tablesorter');
        var newtablecontents = ($(this).hasClass('rating'))? sortRating(tablecontent) : sortTitle(tablecontent);
        if ($(this).hasClass('reverse')) $(this).removeClass('reverse');
        else{
            $(this).addClass('reverse');
            newtablecontents.reverse();
        }

        tbody.empty();
        newtablecontents.forEach(function(item) {
            tbody.append('<tr><td>'+item[0]+'</td><td>'+item[1]+'</td><td><button>Delete</button></td></tr>')
        });
    });

    function getTableContents(obj) {
        var content = [];
        $(obj + ' tbody').find('tr').each(function () {
            var eachData = [];
            $(this).find('td').each(function() {
                eachData.push($(this).text());
            });
            content.push(eachData);
        });
        return content;
    }

    function sortRating(r) {
        return r.sort(function(a, b) {
            return a[1] - b[1]
        });
    }

    function sortTitle(r) {
        return r.sort();
    }    

    $('.button').on('click',function() {
        var inputTitle = document.getElementById('inputTitle');
        var inputRating = document.getElementById('inputRating');
        rows.push([inputTitle.value, inputRating.value]);
        tbody.empty();
        rows.forEach(function(item) {
            tbody.append('<tr><td>'+item[0]+'</td><td>'+item[1]+'</td><td><button>Delete</button></td></tr>')
        });        
    });

    $("#searchQueryInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});