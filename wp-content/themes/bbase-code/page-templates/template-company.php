<?php
/**
 * Template Name: Company Profile
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package BBase_Code
 */


defined( 'ABSPATH' ) || exit;

get_header(); the_post(); ?>
<div class="wrap-page-sc">
    <div class="wrap-page-sc-main">
        <div class="pagemain-sc pageRow-sc row-flex-sc">
            <div class="col-sc-3">
                <?php include( dirname(__FILE__) .'/sideBar-main.php' ); ?>
            </div>
            <div class="col-sc-7  pageRow-sc">
                <div class="block-profile">
                    <h2>会社概要</h2>
                    <div class="firgure-block">
                        <figure class="wp-block-image" id="block-a5acea6e-06a7-4f45-aaeb-d95d4ef78337"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.87aa8d22.svg"
                                alt="This image has an empty alt attribute; its file name is Frame-39789-4.png" />
                        </figure>

                    </div>


                    <figure class="wp-block-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>社名</td>
                                    <td>クラブン株式会社</td>
                                </tr>
                                <tr>
                                    <td>所在地</td>
                                    <td>〒710-0834 岡山県倉敷市笹沖410-5</td>
                                </tr>
                                <tr>
                                    <td>創業</td>
                                    <td>1951年3月1日</td>
                                </tr>
                                <tr>
                                    <td>資本金</td>
                                    <td>4,785万円</td>
                                </tr>

                                <tr>
                                    <td>役員</td>
                                    <td>
                                        <p class="itemCV"><span class="nameCV">代表取締役</span><span class="dtCV">伊澤
                                                正信（通称：ジョージ)</span></p>
                                        <p class="itemCV"><span class="nameCV">常務取締役</span><span class="dtCV">香西
                                                勇</span></p>
                                        <p class="itemCV"><span class="nameCV">常務取締役</span><span class="dtCV">松成
                                                雅治</span></p>
                                        <p class="itemCV"><span class="nameCV">取締役</span><span class="dtCV"> 秋山
                                                克彦</span></p>
                                        <p class="itemCV"><span class="nameCV">執行役員</span><span class="dtCV">久山
                                                明宏</span></p>
                                        <p class="itemCV"><span class="nameCV">執行役員</span><span class="dtCV">伊澤
                                                京子</span></p>
                                        <p class="itemCV"><span class="nameCV">監査役</span><span class="dtCV">伊澤 順子</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>従業員数</td>
                                    <td>397名（2022年6月末）
                                    </td>
                                </tr>
                                <tr>
                                    <td>売上高</td>
                                    <td>80億800万円（2022年6月末）</td>
                                </tr>
                                <tr>
                                    <td>主要取引銀行</td>
                                    <td>中国銀行倉敷支店、トマト銀行倉敷支店</td>
                                </tr>
                                <tr>
                                    <td>営業品目</td>
                                    <td>
                                        <span class="dotSq">■</span> オフィス家具、OA機器、事務用品の販売<br />
                                        <span class="dotSq">■</span> 物流機器、空調機器及び内装工事の設計・施工
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </figure>

                    <div class="wp-block-essential-blocks-row alignfull">
                        <div class="eb-parent-wrapper eb-parent-eb-row-sete1tc ">
                            <div class="eb-row-root-container eb-row-sete1tc" data-id="eb-row-sete1tc">
                                <div class="eb-row-wrapper">
                                    <div class="eb-row-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="wrap-block">
                    <h2 id="block-6a4fde5b-42a0-4e13-ba0f-925aebda0ded">地図</h2>

                    <iframe
                        src="https://www.google.co.jp/maps/embed?pb=!1m14!1m12!1m3!1d2742.63092977808!2d133.76880091890777!3d34.57403910006674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2s!4v1684229149317!5m2!1sja!2s"
                        style="border:0; width: 100%;" height="450" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>



        </div>
    </div>
</div>


<!-- /wp:heading -->
<?php get_footer() ?>