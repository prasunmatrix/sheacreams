    <div class="hero banner_2" style="background-image: url(<?=base_url()?>uploads/<?=$banner?>);">
        <div class="hero-content">
            
        </div>
    </div>

    <div class="">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white">
          <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Environmental Policy</li>
        </ol>
      </nav>
    </div>

    <div class="container-fluid">
        <h4 class="bg-light p-3 mb-4">Environmental Policy</h4>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <?=config('ENVIRONMENTAL_POLICY', 'value')?>
                </div>
           </div>
        </div>
    </div>