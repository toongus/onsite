<?php get_header(); ?>
<!-- Validation Forms -->
                        <div class="tab-pane fade" id="profile-1">
                            <form action="#" id="sky-form1" class="sky-form">
                                <header>Available validation rules</header>

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Required field</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="required">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Email validation</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-envelope"></i>
                                                <input type="email" name="email">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">URL validation</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-globe"></i>
                                                <input type="url" name="url">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Date validation</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-calendar"></i>
                                                <input type="text" name="date">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-4">
                                            <label class="label">Minimum length</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="min">
                                            </label>
                                        </section>
                                        <section class="col col-4">
                                            <label class="label">Maximum length</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="max">
                                            </label>
                                        </section>
                                        <section class="col col-4">
                                            <label class="label">Range length</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="range">
                                            </label>
                                        </section>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="label">Digits validation</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="digits">
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Decimal number validation</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="number">
                                            </label>
                                        </section>
                                    </div>

                                    <div class="row">
                                        <section class="col col-4">
                                            <label class="label">Minimum value</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="minVal">
                                            </label>
                                        </section>
                                        <section class="col col-4">
                                            <label class="label">Maximum value</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="maxVal">
                                            </label>
                                        </section>
                                        <section class="col col-4">
                                            <label class="label">Range value</label>
                                            <label class="input">
                                                <i class="icon-append fa fa-asterisk"></i>
                                                <input type="text" name="rangeVal">
                                            </label>
                                        </section>
                                    </div>
                                </fieldset>

                                <footer>
                                    <button type="submit" class="btn-u btn-u-default">Submit</button>
                                    <button type="button" class="btn-u" onclick="window.history.back();">Back</button>
                                </footer>
                            </form>
                        </div>
                        <!-- End Validation Forms -->
<?php get_footer(); ?>