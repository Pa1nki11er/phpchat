var task = document.getElementById("task")
console.log(task);
/*function linethrow(element){
    element.nextElementSibling.style.backgroundColor = "red";
    alert("d");
}*/

$(document).ready(function()
    {
        $(document).on('click','input', function()
            {
                //console.log(this);
                if ($(this).prop('checked')) 
                {
                    console.log("lala");
                    $(this).next("#task").css("text-decoration", "line-through");
                    var taskInDb = $(this).next("#task").text().trim();
                   
                    //var params = "&TaskName=" + taskInDb + "&Aktion=1";
                    console.log(taskInDb);
                    $.ajax({
                        method:"POST",
                        url: "save_task.php",
                        dataType: "json",
                        data:{taskName: taskInDb, action: "1"}
                    }).done(function(response)
                    {
                        var antwort = response;
                        console.log(antwort);
                    }).fail(function(jqXHR, textStatus, errorThrown) {
                        console.error("Error: " + textStatus, errorThrown);
                    });    
                }
                else
                {
                    $(this).next("#task").css("text-decoration", "none");
                }
                
                
            });
    });
