
$(document).ready( function () {
fetchPlaces();
    function fetchPlaces(){
        let category = $('#category').val();
        $.post('Backend/fetch-places.php', {category}, function(response){
            
            try{
            let places = JSON.parse(response);
            let template = "";

            places.forEach(place => {
                let customURL = place.name;
                let URL = customURL.split(' ').join('+');
                template += `
                <div class="col-lg-12 col-md-10 col-sm-12 p-3 image">

                
                                <div class="card card-image" style="background-image: url(data:image/jepg;base64,${place.image}); background-position: center top; background-repeat: no-repeat; background-attachment: scroll;  background-size: cover;">
                
                
                                    <div class="text-white text-center d-flex align-items-center card-bg py-5 px-4">
                                        <div>
                                            <h5 class="text-white" ><i class="fas fa-chart-pie"></i>${place.location} </h5>
                                            <h3 class="card-title pt-2"><strong>${place.name}</strong></h3>
                                            <div class="line-clamp"> 
                                            <p>
                                                ${place.description}
                                            </p>
                                            </div>
                                            <a href ="comments.php?place=${URL}" class="btn btn-danger text-white"><i class="far fa-clone left"></i>Más INFO</a>
                                        </div>
                                    </div>
               
                                </div>
                
                            </div>
                
                
                `;
               
            });
            $('#places').html(template);
            console.log(places);
        }catch(e){
            $('#places').html(response);
        }
        })
    };

})