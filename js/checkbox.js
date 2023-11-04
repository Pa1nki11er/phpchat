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
                        
                }
                else
                {
                    $(this).next("#task").css("text-decoration", "none");
                }
                
                
            });
    });
