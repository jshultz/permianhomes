<form method="get" id="searchform" action="<?php echo UT_HOME; ?>" >
  <p class="fleft search">
    <label>
      <input type="text" value="<?php the_search_query(); ?>" name="s" />
    </label>
    <label>
      <b>
       <input type="submit"  value="Search" class="search1" />
     </b>
    </label>
  </p>
</form>