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
<<<<<<< HEAD

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
=======
>>>>>>> b45e7d4fccde5d25bdcde8420bdcec7f417297a7
