{{-- Arrow Button left nav --}}
<div class="nav-left-clicker">
    <ion-icon name="arrow-forward-outline"></ion-icon>
</div>

{{-- Menu in left bar --}}
<div class="menu">
    <div>
        <h2><a href="/home"  <?php if($pageName == 'Semua Task' ) echo 'class=text-primary' ?> >Semua</a></h2>
        <h2><a href="/my-day" <?php if($pageName == 'My Day' ) echo 'class=text-primary' ?> >My Day</a></h2>
        <h2><a href="/important" <?php if($pageName == 'Important' ) echo 'class=text-primary' ?> >Important</a></h2>
    </div>
    <div>
        <h2>Due Dates</h2>
        <div>
            <li><a href="/besok" <?php if($pageName == 'Tommorow' ) echo 'class=text-primary' ?>>Besok</a></li>
            <li><a href="/minggu-ini" <?php if($pageName == 'This Week' ) echo 'class=text-primary' ?>>Minggu Ini</a></li>
            <li><a href="/bulan-ini" <?php if($pageName == 'This Month' ) echo 'class=text-primary' ?>>Bulan Ini</a></li>
        </div>
    </div>
    <div>
        <h2>Group</h2>
        <div>
            <?php foreach($grups as $grup){ ?>
            <li><a href="/grup/{{ $grup->ID_GRUP }}" <?php if($pageName == $grup->NAMA_GRUP ) echo 'class=text-primary' ?> >{{ $grup->NAMA_GRUP }}</a></li>
            <?php }?>
        </div>
    </div>
    <div>
        <h2>Categories</h2>
        <div>
            <li><a href="/very-urgent" <?php if($pageName == 'Very Urgent' ) echo 'class=text-primary' ?> >Very Urgent</a></li>
            <li><a href="/urgent" <?php if($pageName == 'Urgent' ) echo 'class=text-primary' ?> >Urgent</a></li>
            <li><a href="/normal" <?php if($pageName == 'Normal' ) echo 'class=text-primary' ?> >Normal</a></li>
        </div>
    </div>
</div>