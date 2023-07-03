<?php
/**
 * Template Name: For Newbie
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
            <div class="col-sc-7  pageRow-sc">
            <div class="row-sc" id="tab-tur-1">
                <div class="box-row-sc">
                    <h2>初めての方へ</h2>
                    <p>個人と企業の両方がそれを使用できます。 ノベルティやお土産の制作に慣れていても心配しないでください。スタッフは最後まであなたをサポートします。</p>
                </div>
            </div>
            <div class="row-sc" id="tab-tur-2">
                <div class="wrap-row-sc">
                    <div class="row-one-sc">
                        <h3>製品/印刷価格</h3>
                        <p class="main-cl-text">この価格を比較してください！ 慎重に選択された製品のみが卸売価格で提供されます！</p>
                        <p>卸売価格で選択された製品！欲しい！ すべてのノベルティ製品は、製造業者と卸売業者によって卸売価格で提供されています。 さらに、多くのノベルティの中から、スタッフが実際に取り上げて慎重に選択した製品のみを投稿します。</p>
                    </div>
                    <div class="row-flex-sc tab-companyCap">
                        <div class="col-sc-3 wrap-one-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hat-kurabun.png" />
                        </div>
                        <div class="col-sc-7">
                            <div class="box-head">
                            <span>例えば:</span>
                            <h4>KURABUN company cap</h4>
                            </div>
                           
                            <ul>
                                <li>自然な小売価格 <span class="main-cl-text">165円（税込）</span></li>
                            </ul>
                            <p class="list-arrow">→販売価格 75円（税抜）／83円（税込）</p>
                            <ul>
                                <li>カーラー希望小売価格  <span class="main-cl-text">242円（税込）</span></li>
                            </ul>
                            <p class="list-arrow">→ 販売価格 110円（税抜）／121円（税込）</p>
                            <p>提供させて頂いております！</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row-sc" id="tab-tur-3">
                <div class="wrap-row-sc">
                    <div class="row-one-sc tab-cart">
                            <h3>少量注文</h3>
                            <h4 class="main-cl-text maintext-bold">少しだけ作りたい方もご安心ください</br>小ロット注文も承ります！</h4>
                            <p class="text-sc-normal">ロット注文も承ります！</br>
ノベルティサイトは企業様向けの大口注文しか受け付けていないことが多いですが、当社なら小口注文</br>も可能です！</p>
                            <ul>
                                <li>1,500円以上→20個から</li>
                                <li>1,499円以下の商品 → 30個以上から</li>
                               
                            </ul>
                            <p class="text-xl-small">※2020年6月25日以降は申込単位の分割料金が発生しないため、端数が出ても追加料金は発生しません。 ※一部商品</br>は条件が異なります。 詳しくは商品ページをご確認ください。</p>
                    </div>
                    
                </div>
            </div>
            <div class="row-sc" id="tab-tur-4">
                <div class="wrap-row-sc">
                    <div class="row-one-sc tab-image-tur">
                            <h3>無料サンプル画像作成</h3>
                            <p class="main-cl-text maintext-bold">少しだけ作りたい方もご安心ください</br>小ロット注文も承ります！</p>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Image.png" />
                           <p class="text-sc-normal">ネーム入りサンプル画像1枚無料！</br>
ご注文いただきましたら、ご要望に応じてノベルティネームサンプル画像（画像校正）を無料で作成い</br>たします。</p>
                            <p class="text-sc-normal">※原則として、ご注文いただいたお客様が対象となります。
                            </br>※2点目以降は1点につき1,100円（税込）となります。
【現物校正をご希望の場合】 納期＋1週間、作成料7,700円（税込）で作成可能です。</p>
                    </div>
                    
                </div>
            </div>
            <div class="row-sc" id="tab-tur-5">
                <div class="wrap-row-sc">
                    <div class="row-one-sc">
                            <h3>ドラフトデータ</h3>
                            <p class="main-cl-text maintext-bold">入稿データやデザインでお困りのことがございましたら、スタッフまでご相談ください。</p>
                           
                            <p class="text-sc-normal">ノベルティのデザイン注文方法は、自分でデザインを作成できるデザインシミュレーター、スタッフにデザインを依頼する「デザイン作成サービス」、「完成データ入稿」の3つがあります。 印刷方法やケースに合わせてお選びください。</p>
                    </div>
                    <div class="row-flex-sc tabBoxSC">
                        <div class="col-sc-5 itemBox-sc">
                            <div class="box-sc-ct">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/for-new-3.png" />
                                <p class="main-cl-text maintext-bold">デザインシミュレーター</p>
                                <p class="text-sc-normal">ログイン不要で、ご注文前に簡単にセルフデザインできる便利なツールです。 ご注文後、担当スタッフとデータの再確認ができるので安心です。</p>
                                <a href="javascript:void(0)">詳細を表示<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-long.png" /></a>
                            </div>
                            
                        </div>
                        <div class="col-sc-5  itemBox-sc">
                            <div class="box-sc-ct">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/for-new-4.png" />
                            <p class="main-cl-text maintext-bold">完全なデータの提出</p>
                            <p class="text-sc-normal">Illustrator、Photoshop、Clip Studioなどのデザインソフトウェアを使用して特定のデザインを作成する場合は、完全なデータを...
                     </p>
                                <a href="javascript:void(0)">詳細を表示<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-long.png" /></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-sc" id="tab-tur-6">
                <div class="wrap-row-sc">
                    <div class="row-one-sc">
                        <h3>印刷方法</h3>
                        <p class="main-cl-text maintext-bold">レーザー彫刻、箔押し、台紙印刷など</br>
様々な印刷方式に対応</p>
                        <p>製品に合わせて8つの異なる印刷方法があります！ ニーズに応じて、さまざまな印刷方法から選択できます。 さらに、織り、フルカラーのタオル、粘着性のノート、マグカップで印刷を表現するJacquardタオルなど、多くのオリジナルアイテムがあります。</p>
                    </div>
                    <div class="row-flex-sc tab-print">
                    <div class="col-sc-5">
                            <div class="box-head">
                           
                            <h4>くらぶん印刷方法：</h4>
                            </div>
                            <ul class="text-nm-list">
                                <li>パッド印刷</li>
                                <li>シルク印刷</li>
                                <li>ロータリーシルク印刷</li>
                                <li>フルカラー印刷、レーザー彫刻</li>
                                <li>フォイルスタンピング/空のスタンピング</li>
                                <li>タンブラーマウント印刷</li>
                            </ul>
                          
                            <button class="btn-turtorial" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M14 15.9991C14 17.7691 13.23 19.3691 12 20.4591C10.94 21.4191 9.54 21.9991 8 21.9991C4.69 21.9991 2 19.3091 2 15.9991C2 13.9743 3.01397 12.1804 4.5554 11.0964C4.80358 10.9219 5.1393 11.0413 5.27324 11.3135C6.21715 13.2322 7.95419 14.669 10.02 15.2291C10.65 15.4091 11.31 15.4991 12 15.4991C12.4872 15.4991 12.9539 15.4529 13.4074 15.3678C13.6958 15.3137 13.9828 15.4985 13.9955 15.7916C13.9985 15.8611 14 15.9305 14 15.9991Z" fill="#6CA1A2"/>
<path d="M18 8C18 8.78 17.85 9.53 17.58 10.21C16.89 11.95 15.41 13.29 13.58 13.79C13.08 13.93 12.55 14 12 14C11.45 14 10.92 13.93 10.42 13.79C8.59 13.29 7.11 11.95 6.42 10.21C6.15 9.53 6 8.78 6 8C6 4.69 8.69 2 12 2C15.31 2 18 4.69 18 8Z" fill="#6CA1A2"/>
<path d="M22 15.9991C22 19.3091 19.31 21.9991 16 21.9991C15.2555 21.9991 14.5393 21.8633 13.8811 21.6131C13.5624 21.492 13.503 21.0841 13.7248 20.8253C14.8668 19.4928 15.5 17.785 15.5 15.9991C15.5 15.6591 15.47 15.3191 15.42 14.9991C15.3902 14.8146 15.4844 14.6333 15.6478 14.5428C16.9719 13.8098 18.0532 12.6866 18.727 11.3144C18.8609 11.0418 19.1968 10.9221 19.4452 11.0968C20.9863 12.1809 22 13.9746 22 15.9991Z" fill="#6CA1A2"/>
</svg>デザイン提出データに移動します</button>
                        </div>
                        <div class="col-sc-5">
                        <img class="img-full-w" src="<?php echo get_template_directory_uri(); ?>/assets/images/for-new-2.png" />
                        </div>
                       
                        
                    </div>
                </div>
            </div>
            <div class="row-sc" id="tab-tur-7">
                <div class="wrap-row-sc">
                    <div class="row-one-sc">
                        <h3>予算でお探し機能</h3>
                       
                    </div>
                    <div class="row-flex-sc tab-print">
                    <div class="col-sc-5">
                    <p class="main-cl-text maintext-bold"  style="margin-bottom:16px">予算に合った製品が見つからない場合。予算内で</br>
                        製品の選択をサポートします！</p>
                        <p>製品ページから見積もりを取得できます！ 「予算に合った製品価格がわからない」や「印刷コストを計算したときに予算を超えた」など、斬新さを選ぶときにつまずいたことはありますか？予算に最適です！もしそうなら、あなたの予算に合った最高の製品価格帯を見つけることができます</p>
                          
                            <button class="btn-turtorial" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12.75 15.9203H13.4C14.05 15.9203 14.59 15.3403 14.59 14.6403C14.59 13.7703 14.28 13.6003 13.77 13.4203L12.76 13.0703V15.9203H12.75Z" fill="#6CA1A2"/>
<path d="M11.9701 1.90041C6.45007 1.92041 1.98007 6.41041 2.00007 11.9304C2.02007 17.4504 6.51007 21.9204 12.0301 21.9004C17.5501 21.8804 22.0201 17.3904 22.0001 11.8704C21.9801 6.35041 17.4901 1.89041 11.9701 1.90041ZM14.2601 12.0004C15.0401 12.2704 16.0901 12.8504 16.0901 14.6404C16.0901 16.1804 14.8801 17.4204 13.4001 17.4204H12.7501V18.0004C12.7501 18.4104 12.4101 18.7504 12.0001 18.7504C11.5901 18.7504 11.2501 18.4104 11.2501 18.0004V17.4204H10.8901C9.25007 17.4204 7.92007 16.0404 7.92007 14.3404C7.92007 13.9304 8.26007 13.5904 8.67007 13.5904C9.08007 13.5904 9.42007 13.9304 9.42007 14.3404C9.42007 15.2104 10.0801 15.9204 10.8901 15.9204H11.2501V12.5404L9.74007 12.0004C8.96007 11.7304 7.91007 11.1504 7.91007 9.36041C7.91007 7.82041 9.12007 6.58041 10.6001 6.58041H11.2501V6.00041C11.2501 5.59041 11.5901 5.25041 12.0001 5.25041C12.4101 5.25041 12.7501 5.59041 12.7501 6.00041V6.58041H13.1101C14.7501 6.58041 16.0801 7.96041 16.0801 9.66041C16.0801 10.0704 15.7401 10.4104 15.3301 10.4104C14.9201 10.4104 14.5801 10.0704 14.5801 9.66041C14.5801 8.79041 13.9201 8.08041 13.1101 8.08041H12.7501V11.4604L14.2601 12.0004Z" fill="#6CA1A2"/>
<path d="M9.41992 9.37008C9.41992 10.2401 9.72992 10.4101 10.2399 10.5901L11.2499 10.9401V8.08008H10.5999C9.94992 8.08008 9.41992 8.66008 9.41992 9.37008Z" fill="#6CA1A2"/>
</svg>予算内で使ってみます</button>
                        </div>
                        <div class="col-sc-5">
                        <img class="img-container-w" src="<?php echo get_template_directory_uri(); ?>/assets/images/for-new-5.png" />
                        </div>
                       
                        
                    </div>
                </div>
            </div>
            <div class="row-sc" id="tab-tur-8">
                <div class="wrap-row-sc">
                    <div class="row-one-sc">
                            <h3>自動見積機能</h3>
                            <p class="main-cl-text maintext-bold">その場で購入予定金額を分かります！自動見積機能を使用した簡単な見積</p>
                            <p class="text-sc-normal">※自動見積もりは概算です。 正式見積は自動見積からスタッフ見積へお進みください。 ※在庫は常に流動しています。 入金確認後、在庫確保となります。</p>   
                            <p class="text-xl-small">製品ページから見積もりを取得できます！合計金額がどれだけあるかを知りたい！資料の出会いに使用したいのですが、問い合わせる時間はありません！そのような場合、製品ページからの自動見積もりを使用してください。自動の結果見積もりはPDFで保存して印刷できます</p>
                            <img class="img-full-w" src="<?php echo get_template_directory_uri(); ?>/assets/images/for-new-6.png" />
                         </div>
                    
                </div>
            </div>
            <div class="row-sc" id="tab-tur-9">
                <div class="wrap-row-sc">
                    <div class="row-one-sc">
                            <h3>会員機能</h3>
                            <p class="main-cl-text maintext-bold">多くの有用な機能！会員機能を使用してください</p>
                        
                            <div class="list-item-nm">
                            <p>会員として登録することにより、便利な機能を使用できます</p>
                            <ul class="text-nm-list">
                                <li>「お気に入りのリスト」で気にかけている製品を保存できます</li>
                                <li>過去の引用の歴史と秩序の履歴を見ることができます</li>
                                <li>見積履歴から直接注文するか、注文履歴から同じご注文内容を再注文することができます。</li>
                                <li>チャット機能</li>
                            </ul>
                            </div>
                            
                            <div class="list-item-nm">
                            <p>会員登録なしで使える一般的な機能</p>
                            <ul class="text-nm-list">
                                <li>ご予算に合わせます</li>
                                <li>自動見積</li>
                                <li>提案書ダウンロード（会員機能から一般機能へ！）</li>
                                <li>お届けまでのスケジュール</li>
                            </ul>
                            </div>
                           
                            <img class="img-full-w" src="<?php echo get_template_directory_uri(); ?>/assets/images/for-new-7.png" />
                         </div>
                    
                </div>
            </div>
            <div class="row-sc" id="tab-tur-10">
                <div class="wrap-row-sc">
                    <div class="row-one-sc">
                            <h3>ご請求・お支払い</h3>
                            <p class="main-cl-text maintext-bold">私たちはあなたの内部文書と支払い条件を処理してください、ノベルティスタッフに相談してください！</p>
                           
                            <p class="text-sc-normal">私たちは、見積り、請求書、契約などの内部文書をフォーマットで処理できます。支払いを検討すると、銀行の譲渡または前払いを求めますが、地方自治体、行政機関、学校、病院、上場企業などについては、受け入れます。配達の終わりまたは来月の終わりに支払いをしてください。お問い合わせください。ご連絡ください</p>
                    </div>
                    
                </div>
            </div>
            <div class="row-sc" id="tab-tur-11">
                <div class="wrap-row-sc">
                    <div class="row-one-sc">
						
                            <h3>配達日・配送料</h3>
                            <!--<p class="main-cl-text maintext-bold">お急ぎの場合はお問い合わせください</br>
納期も柔軟に対応いたします！</br>
ご希望のお届け日でお届けいたします。</p>
                           
                            <p class="text-sc-normal">お急ぎの場合や少し遅れる場合など、お客様のご要望に合わせてお届けいたします。 ※工場の都合により短納期の場合もございますので、事前にご相談ください。
通常、商品への印刷の場合は校正完了から約2週間～2.5週間、商品のみのご購入の場合は入金確認後1日～2日程度でのお届けとなります。</p>-->
<figure class="wp-block-table">
     <div class="dl_table">

<dl>
<dt>配送業者</dt>
<dd>ヤマト運輸</dd>
</dl>

<dl>
<dt>送料について</dt>
<dd>
<p>お買い上げ金額6,000円（税別）以上の場合は、弊社が負担いたします。<br>
北海道・沖縄へのお届けには別途料金がかかります。</p>
<p>※ご請求額にかかわらず、消費税・手数料・送料を除く商品ご注文金額が（税別）6,000円以上の場合のみ送料が無料となります。
</p>

<table>
<thead>
<tr>
<th>&nbsp;</th>
<th class="wtd01">地域詳細</th>
<th>6,000円<br>
（税別）未満</th>
<th>6,000円<br>
（税別）以上</th>
</tr>
</thead>
<tbody>
<tr>
<th>関東～九州</th>
<td>茨城県/栃木県/群馬県/埼玉県/千葉県/東京都/神奈川県/新潟県/富山県/石川県/福井県/山梨県/長野県/岐阜県/静岡県/愛知県/三重県/滋賀県/京都府/大阪府/兵庫県/奈良県/和歌山県/鳥取県/島根県/岡山県/広島県/山口県/徳島県/香川県/愛媛県/高知県/福岡県/佐賀県/長崎県/熊本県/大分県/宮崎県/鹿児島県</td>
<td class="label center" data-label="6,000円（税別）未満">680円<br></td>
<td class="label center" data-label="6,000円（税別）以上">0円</td>
</tr>
<tr>
<th>東北</th>
<td>青森県/岩手県/宮城県/秋田県/山形県/福島県</td>
<td class="label center" data-label="6,000円（税別）未満">970円<br></td>
<td class="label center" data-label="6,000円（税別）以上">0円</td>
</tr>
<tr>
<th>北海道、沖縄</th>
<td>北海道/沖縄県</td>
<td class="label center" data-label="6,000円（税別）未満">1,450円<br></td>
<td class="label center" data-label="6,000円（税別）以上">725円</td>
</tr>
</tbody>
</table>
<ul class="list">

<li>【高額購入割引特典】1配送先につき、合計6,000円（税別）以上ご注文いただいた場合、送料が0円になります。北海道・沖縄へのお送りは別途料金がかかります。</li>
<li>【まとめ買い時の扱い】1配送先につき、送料別の商品を複数ご注文いただいた場合、送料は上記料金表1個分送料になります。<br>
送料別の商品と送料込の商品を同時にご注文の場合は、以下の送料込商品の扱いもご参照ください。</li>

<li>【送料分消費税】・・・この料金には消費税が 含まれています。<br>
【離島他の扱い】・・・離島・一部地域は追加送料がかかる場合があります。<br>
【ダンボールリユース】･･･当店では環境に配慮し、点検した上で、中古ダンボールを再利用させて頂く場合がございます。</li>
</ul>
</dd>
</dl>

<dl>
<dt>発送について</dt>
<dd>ご注文確認後3営業日以内に出荷します。<br>
（ご注文内容によってはそれ以上かかる場合もございます。また当店に在庫がない場合もございますので、その場合は当社から改めて納期のご連絡をさせていただきます。恐れ入りますが予めご了承の程よろしくお願いします。）</dd>
</dl>

<dl>
<dt>お届け時間について</dt>
<dd>時間帯お届けが可能です。ご指定のある場合は、下記のお時間をご注文時にご指定ください。
(※2017年6月19日以降は下記時間帯に変更となりました。)
<ul class="list">
<li>午前中</li>
<li>14:00-16:00</li>
<li>16:00-18:00</li>
<li>18:00-20:00</li>
<li>19:00-21:00</li>
</ul>
</dd>
</dl>

<dl>
<dt>備考</dt>
<dd>日本国外への配送は承っておりませんのでご了承ください。</dd>
</dl>

</div>

       </figure>
                    </div>
                    
                </div>
            </div>
            </div>
            <div class="col-sc-3">
                <div class="sidebar-floating">
                        <h3>目次</h3>
                        <div class="list-sec-tur">
                            <ul>
                                <li class="item-navTop" data-sec="tab-tur-1">商品・印刷価格</li>
                                <li class="item-navTop" data-sec="tab-tur-2">少量注文</li>
                                <li class="item-navTop" data-sec="tab-tur-3">無料サンプル画像作成</li>
                                <li class="item-navTop" data-sec="tab-tur-4">ドラフトデータ</li>
                                <li class="item-navTop" data-sec="tab-tur-5">印刷方法</li>
                                <li class="item-navTop" data-sec="tab-tur-6">予算でお探し機能</li>
                                <li class="item-navTop" data-sec="tab-tur-7">自動見積機能</li>
                                <li class="item-navTop" data-sec="tab-tur-8">会員機能</li>
                                <li class="item-navTop" data-sec="tab-tur-9">ご請求/お支払い</li>
                                <li class="item-navTop" data-sec="tab-tur-10">配達日/配送料</li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /wp:heading -->
<?php get_footer() ?>