<form class="d-flex">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-sm-12 col-lg-4 col-md-12">
                            Filtrer par sous catégorie
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Tous</option>
                                <?php
                                $categories = get_categories( array(
                                    'orderby' => 'name',
                                    'order'   => 'ASC',
                                    'parent'  => 17,
                                    "hide_empty" => 0,
                                ) );
                                
                                foreach( $categories as $category ) {
                                    echo '<option value="'.$category->cat_name.'">'.$category->cat_name.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-4 col-sm-12 col-lg-4 col-md-12">
                        Filtrer par genre
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Tous</option>
                                <?php
                                $categories = get_categories( array(
                                    'orderby' => 'name',
                                    'order'   => 'ASC',
                                    'parent'  => 3,
                                    "hide_empty" => 0,
                                ) );
                                
                                foreach( $categories as $category ) {
                                    echo '<option value="'.$category->cat_name.'">'.$category->cat_name.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-4 col-sm-12 col-md-12 col-lg-4">
                        Filtrer par année
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Tous</option>
                                <?php
                                for( $i=1984;$i<2022;$i++) {
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 ">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </div>
                </div>
                
                    
                </form>