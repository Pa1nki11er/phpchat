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
                console.log("we");
                $(this).next("#task").css("text-decoration", "none");
                var taskInDb = $(this).next("#task").text().trim();
                $.ajax({
                    method:"POST",
                    url: "save_task.php",
                    dataType: "json",
                    data:{taskName: taskInDb, action: "0"}
                }).done(function(response)
                {
                    var antwort = response;
                    console.log(antwort);
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    console.error("Error: " + textStatus, errorThrown);
                });
            
            }
            
            
        });
            //$("#imgDel").click(function()
        $(document).on('click','#imgDel', function()
        {
            console.log("dw");
            $( this ).parent().remove();
            taskToDel = $( this ).parent().find('#task').text().trim();
            console.log(taskToDel);
            
            $.ajax({
                method:"POST",
                url: "delete_task.php",
                dataType: "json",
                data:{taskName: taskToDel}
            }).done(function(response)
            {
                var antwort = response;
                console.log(antwort);
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.error("Error: " + textStatus, errorThrown);
            });
        });
        $(document).on('mouseover','#imgDel', function()
        {
            $( this ).css({"height":"30px", "width":"30px"});    
        });
        $(document).on('mouseleave','#imgDel', function()
        {
            $( this ).css({"height":"20px", "width":"20px"});    
        });

    });
