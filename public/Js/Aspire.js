var Easy = {

    SvCsj : (a) => {
        $("." + a).on("click", function(){

            dt = $(this).attr("data-reg");
            Swal.fire({
                title: "CONFIRMAR VOTO CONCEJO", 
                text: "Deseas Votar por el Candidato Seleccionado", 
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type:"POST",
                        url: 'SaveConsejo',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            "Props" : '25',
                            "items" : 'AFF5598EAADFA',
                            "Idr" : dt                            
                        },    
                        success: function (data) {
                            
                            if(data.state == "OK"){
                                Swal.fire(
                                    'VOTO OK',
                                    'Su voto se ha registrado correctamente',
                                    'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }else{
                                        location.reload();
                                    }
                                })			
                                
                            }
                        },
                        error: function (xhr) {
                            console.log(xhr);
                        }
                    }); 



                }
            })

        });
    },

    SvPsn : (a) => {
        $("." + a).on("click", function(){

            dt = $(this).attr("data-reg");
            Swal.fire({
                title: "CONFIRMAR VOTO PERSONERO", 
                text: "Deseas Votar por el Candidato Seleccionado", 
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type:"POST",
                        url: 'SavePerson',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            "Props" : '25',
                            "items" : 'AFF5598EAADFA',
                            "Idr" : dt                            
                        },    
                        success: function (data) {
                            
                            if(data.state == "OK"){
                                Swal.fire(
                                    'VOTO OK',
                                    'Su voto se ha registrado correctamente',
                                    'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }else{
                                        location.reload();
                                    }
                                })			
                                
                            }

                        },
                        error: function (xhr) {
                            console.log(xhr);
                        }
                    }); 



                }
            })

        });
    },


}