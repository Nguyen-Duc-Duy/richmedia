<script>
  // category
     // ajax show item cat
     function showCat(id){
      $.ajax({
        type: "POST",
        url: "{{ route('modalCat')}}",
        data:{_token : "{{ csrf_token() }}",id: id},
        success: function(result){
          var image = "{{asset('public/Common/image/')}}";
          $('#editeCat-name').val(result['name']);
          $('#editeCat-descript').val(result['descript']);
          if(result['status'] == 1){
            $('#editeCat-status').attr('checked',true);
          }
          $('#idsss').val(result['id']);
        }
      });
    };
  // ajax update cat
  $('#updateCat').click(function updateCat(){
    var id = $('#idsss').val();
    var name = $('#editeCat-name').val();
    var descript = $('#editeCat-descript').val();
    var stt = 1;
    if($('#editeCat-status').attr('checked')){
      stt = 1;
    }else{
      stt = 0;
    };
    var data = [id,name,descript,stt];
    $.ajax({
      type:'POST',
      url:"{{ route('editeCat')}}",
      data: {_token : '{{ csrf_token() }}',data:data},
      success: function(result){
        $("#modal-editeCat").modal("hide");
        $("#cc").load(window.location.href+" #cc");
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: result,
          showConfirmButton: false,
          timer: 1500
        })
      }

    });
  });
  // xóa danh mục
  function deleteCat(id){
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success mx-3',
        cancelButton: 'btn btn-danger mx-3'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: 'Bạn có chắc muốn xóa ?',
      text: "Bạn sẽ xóa vĩnh viễn Danh Mục này kèm theo tất cả Dịch Vụ và Mục báo giá thuộc Danh Mục này !",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Đồng ý !',
      cancelButtonText: 'Hủy !',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {

        // xóa danh mục ajax
        $.ajax({
          type: "POST",
          url:"{{ route('deleteCat') }}",
          data:{_token:'{{ csrf_token() }}',id:id},
          success: function(result){
           swalWithBootstrapButtons.fire(
            result
            ); 
           $("#table").load(window.location.href+" #table");
         }
       })
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
        ) {
        swalWithBootstrapButtons.fire(
          'Xóa thất bại !',
          'error'
          ); 
      }
    });
  };
  // service - dịch vụ
    // ajax show service modal
    function showSer(id){
      $.ajax({
        type: "POST",
        url:"{{ route('modalSer') }}",
        data:{_token:"{{ csrf_token() }}",id:id},
        success: function(result){
          $('#editeSer-name').val(result['name']);
          $('#idCat option[value='+result['id_cat']+']').attr('selected','selected');
          $('#editeSer-descript').val(result['descript']);
          if(result['status'] == 1){
            $('#editeSer-status').attr('checked',true);
          };
          $('#updateSer').attr('onclick','updateSer('+result['id']+')');
          $('#idSer').val(result['id']);
        }
      });
    };
      // update dịch vụ
      $('#updateSer').click(function(){
        var id = $('#idSer').val();
        var name = $('#editeSer-name').val();
        var descript = $('#editeSer-descript').val();
        var id_cat = $('#idCat option:selected').val();
        var stt;
        if($('#editeSer-status').attr('checked')){
          stt = 1;
        }else{
          stt = 0;
        }
        var data = [id,id_cat,name,descript,stt];
        $.ajax({
          type: "POST",
          url: "{{ route('updateSer')}}",
          data:{_token:'{{ csrf_token() }}',data:data},
          success: function(result){
            $("#modal-editeSer").modal("hide");
            $('#cc').load(window.location.href+' #cc');
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: result,
              showConfirmButton: false,
              timer: 1500
            })
          }
        });
      });
      // xóa dịch vụ
      function deleteSer(id){
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success mx-3',
            cancelButton: 'btn btn-danger mx-3'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Bạn có chắc muốn xóa ?',
          text: "Bạn sẽ xóa vĩnh viễn Dịch vụ này kèm theo tất cả  Mục báo giá thuộc Dịch vụ này !",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Đồng ý !',
          cancelButtonText: 'Hủy !',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            swalWithBootstrapButtons.fire(
              'Xóa thành công !',
              'success'
              );
        // xóa dịch vụ ajax
        $.ajax({
          type: "POST",
          url:"{{ route('deleteSer') }}",
          data:{_token:'{{ csrf_token() }}',id:id},
          success: function(result){
            $("#cc").load(window.location.href+" #cc");
          }
        })
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
        ) {
        swalWithBootstrapButtons.fire(
          'Xóa thất bại !',
          'error'
          ); 
      }
    });
      };
  // item - mục báo giá
    // hiển thị mục trên modal
    function showItem(id){
      $.ajax({
        type: "POST",
        url: "{{ route('modalItem')}}",
        data:{_token:'{{csrf_token()}}',id:id},
        success: function(result){
          $('#idItem').val(result['id']);
          $('#editeItem-theme').val(result['theme']);
          $('#editeItem-webLink').val(result['web']);
          $('#idSer option[value='+result['id_service']+']').attr('checked','checked');
          if(result['status'] == 1){
            $('#editeItem-status').attr('checked',true);
          }

        }
      });
    };
    // xóa mục
    function deleteItem(id){
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success mx-3',
          cancelButton: 'btn btn-danger mx-3'
        },
        buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
        title: 'Bạn có chắc muốn xóa ?',
        text: "Bạn sẽ xóa vĩnh viễn mục này !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Đồng ý !',
        cancelButtonText: 'Hủy !',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          swalWithBootstrapButtons.fire(
            'Xóa thành công !',
            'success'
            );
        // xóa dịch vụ ajax
        $.ajax({
          type: "POST",
          url:"{{ route('deleteItem') }}",
          data:{_token:'{{ csrf_token() }}',id:id},
          success: function(results){
            $("#cc").load(window.location.href+" #cc");
          }
        })
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
        ) {
        swalWithBootstrapButtons.fire(
          'Xóa thất bại !',
          'error'
          ); 
      }
    });
    };
    // banner
    function showBanner(id){
      $('#idBanner').val(id);
      $.ajax({
        type:"POST",
        url:"{{route('showModelBanner')}}",
        data:{_token:'{{ csrf_token()}}',id:id},
        success: function (result){
          $('input[name="editTitle"]').val(result["title"]);
          $('input[name="editLinkBanner"]').val(result['link']);
          if(result['active'] == 1){
            $("#editActiveBanner").attr("checked","checked");
          }
          if(result['status'] == 1){
            $("#editStatus").attr("checked","checked");
          }
        }
      })
    }
    // xóa banner
    function deleteBan(id){
      var question = confirm("Bạn có chắc muốn xoán banner này ?");
      if(question){
       $.ajax({
        type:"POST",
        url:"{{route('deleteBan')}}",
        data:{_token:'{{ csrf_token()}}',id:id},
        success: function (result){
          $('#cc').load(window.location.href+" #cc");
          alert(result);
        }
      })
     }
   }
    // delete GioiThieu
    function deleteGioiThieu(id){
      var question = confirm("Bạn có chắc muốn xoá mục này ?");
      if(question){
       $.ajax({
        type:"POST",
        url:"{{route('deleteGioiThieu')}}",
        data:{_token:'{{ csrf_token()}}',id:id},
        success: function (result){
          $('#table').load(window.location.href+" #table");
        }
      })
     }
   }
    // delete TinTuc
    function deleteTinTuc(id){
      var question = confirm("Bạn có chắc muốn xoá mục này ?");
      if(question){
       $.ajax({
        type:"POST",
        url:"{{route('deleteTinTuc')}}",
        data:{_token:'{{ csrf_token()}}',id:id},
        success: function (result){
          $('#table').load(window.location.href+" #table");
        }
      })
     }
   }
    // delete Setting
    function deleteSetting(id){
      var question = confirm("Bạn có chắc muốn xoá mục này ?");
      if(question){
       $.ajax({
        type:"POST",
        url:"{{route('deleteSetting')}}",
        data:{_token:'{{ csrf_token()}}',id:id},
        success: function (result){
          $('#table').load(window.location.href+" #table");
        }
      })
     }
   }
    // delete Setting
    function deleteUser(id){
      var question = confirm("Bạn có chắc muốn xoá mục này ?");
      if(question){
       $.ajax({
        type:"POST",
        url:"{{route('deleteUser')}}",
        data:{_token:'{{ csrf_token()}}',id:id},
        success: function (result){
          $('#table').load(window.location.href+" #table");
        }
      })
     }
   }
     // delete Setting
     function deleteContact(id){
      var question = confirm("Bạn có chắc muốn xoá mục này ?");
      if(question){
       $.ajax({
        type:"POST",
        url:"{{route('deleteContact')}}",
        data:{_token:'{{ csrf_token()}}',id:id},
        success: function (result){
          $('#table').load(window.location.href+" #table");
        }
      })
     }
   }
 </script>
