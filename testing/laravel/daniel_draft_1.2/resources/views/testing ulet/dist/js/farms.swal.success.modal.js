  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });



    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
          icon: "success",
          title: "Successfully created a new role!",
      })
    });
  });

  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });



    $('.swalDefaultSuccessSetObservation').click(function() {
      Toast.fire({
          icon: "success",
          title: "Successfully set observation!",
      })
    });
  });
