@extends('header')
@section('title','VISAinKOREA')
@section('head')
    <link href="css/livingstyle.css" rel="stylesheet" >
    <link href="css/me.css" rel="stylesheet" >
    <script src="js/lik.js"></script>
@endsection
@section('content')

<div id="content">
    <div class="container clearfix">
        <div class="headnav">
            <div class="headnav-content">
                Licing in Korea &nbsp; <img src="img/icon/next.png" style="width:5pt;height:5pt;margin-top:6pt"> &nbsp;&nbsp; 
                <a style="color:#909090" href="#housing">Housing</a> &nbsp;&nbsp; | &nbsp;&nbsp; 
                <a style="color:#909090" href="#education">Education</a> &nbsp;&nbsp; | &nbsp;&nbsp; 
                <a style="color:#909090" href="#driving">Driving</a> &nbsp;&nbsp; | &nbsp;&nbsp; 
                <a style="color:#909090" href="#employment">Employment</a>
            </div> 
        </div>
        <br>
        <div id="primary">
            <main id="main" role="main">
                <div id="housing" class="category-content">
                    <h2>Housing</h2>
                        <div id="$i" class="post-content">
                            <blockquote>
                                <h4>Contents of housing lease protection</h4>
                                <p>
                                    When a lessee is completely delivered the leased house and has completed the resident 
                                    registration, a housing lease contract may take effect against the third person from the next day even if 
                                    <span id="dots1">...</span><span id="more1" class="more">
                                    the lease contract is not registered(Article 3(1) of the 「Housing Lease Protection Act」).
                                    <br>A lessee who is completely delivered the leased house and has completed the resident registration can 
                                    assert the existence of his rights over the leased house and continue to reside in it until the deposit 
                                    money is refunded despite the change in lessor's status due to transfer or auction of the leased house
                                    </span>
                                    <a onclick="showText('dots1','more1','myBtn1')" id="myBtn1" class="myBtn">Read More</a>
                                </p>
                            </blockquote>
                        </div>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Guarantee of the period of lease</h4>
                            <p>
                                The term of house lease is 2 years at the minimum. When the term is not agreed upon or is 
                                shorter than 2 years, the 2 year term is assured. However, the lessee can claim the validity of the lease 
                                <span id="dots2">...</span><span id="more2" class="more">
                                term that is shorter than 2 years (Article 4(1) of the 「Housing Lease Protection Act」).
                                </span>
                                <a onclick="showText('dots2','more2','myBtn2')" id="myBtn2" class="myBtn">Read More</a>
                            </p>
                            </blockquote>
                        </div>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Approval of a right of preferred repayment</h4>
                            <p>
                                When a lessee is completely handed over the house, the resident registration and a fixed date on 
                                the lease contract document is obtained, deposit can be refunded from the converted price of the leased house
                                <span id="dots3">...</span><span id="more3" class="more">
                                (including the land it stands on) in preference to junior obligors or other creditors at the time of the 
                                auction as provided by「The Civil Execution ACT」or a public sale as provided by「The National Tax Collection 
                                act」. (Article 3bis(2) of the 「Housing Lease Protection Act」).
                                <br>Acquisition of a right of preferred repayment for a "small deposit lessee" (a lessee whose deposit is under 
                                a specified amount)
                                <br>When the deposit is small in amount, a lessee who has completely delivered the house and has completed the 
                                resident registration before the application for registration of an auction, may be refunded a specified amount 
                                of deposit in preference to other persons having security right in the leased house, even without obtaining a 
                                fixed date (Article 8 of the 「Housing Lease Protection Act」).
                                </span>
                                <a onclick="showText('dots3','more3','myBtn3')" id="myBtn3" class="myBtn">Read More</a>
                            </p>
                            </blockquote>
                        </div>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Lease registration order</h4>
                            <p>
                                A lessee, who failed to receive a refund of the deposit money after the termination of a lease 
                                contract, may file an application for a lease registration order to the district court that has jurisdiction 
                                <span id="dots4">...</span><span id="more4" class="more">
                                in the location of the leased house. If the lessee has already obtained opposing power and right of preferred 
                                repayment, it may be continuously maintained despite moving out or transferring the resident registration to 
                                another place(Article 3 of the 「Housing Lease Protection Act」).
                                </span>
                                <a onclick="showText('dots4','more4','myBtn4')" id="myBtn4" class="myBtn">Read More</a>
                            </p>
                            </blockquote>
                        </div>
                </div>
                
                <div id="education" class="category-content">
                    <h2>Education</h2>
                    <h3>Requirements and preparations to study in the Republic of Korea</h3>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Preparations for admission</h4>
                            <p>
                                Any person who intends to study or pursue training in the Republic of Korea should obtain information 
                                on and consider the curriculum, academic term, required credits, school expenses, sojourn expenses, etc. in order to 
                                <span id="dots5">...</span><span id="more5" class="more">
                                choose the most suitable school.
                                <br>Any person intending to enroll in a regular program, not a course in Korean language or a short-term program, 
                                should determine whether he fulfills the prerequisites for entering the school of his choice. To enter a university 
                                in the Republic of Korea, for example, an applicant should have completed high school and provide proof thereof, and 
                                some universities may require a certain score in a Korean or English proficiency test.
                                <br>Once the above is satisfied, one should submit an application for admission and relevant documents to the intended
                                school.
                                </span>
                                <a onclick="showText('dots5','more5','myBtn5')" id="myBtn5" class="myBtn">Read More</a>
                            </p>
                            </blockquote>
                        </div>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Entry into the Republic of Korea</h4>
                            <p>
                                Once admission is granted, a visa to enter the Republic of Korea should be acquired. One can 
                                apply for a visa at any ROK diplomatic mission in his country or a third country. Depending on the specific
                                <span id="dots6">...</span><span id="more6" class="more">
                                purpose of entering the ROK, a student (D-2), general trainee (D-4), or general short-term (C-3) visa is 
                                issued.
                                <br>Once entering the ROK, one should register with the head of the Immigration Office or head of the branch
                                office of the Immigration Office having jurisdiction over his place of sojourn within ninety days of entry
                                and obtain a foreigner registration certificate. A foreigner registration certificate has the same effect
                                as an ID card in the ROK.
                                </span>
                                <a onclick="showText('dots6','more6','myBtn6')" id="myBtn6" class="myBtn">Read More</a>
                            </p>
                            </blockquote>
                        </div>
                </div>
                
                <div id="driving" class="category-content">
                    <h2>Driving</h2>
                    <div id="$i" class="post-content">
                        <blockquote>
                        <h4>Prohibition of unlicensed driving</h4>
                        <p>
                            In order to drive a vehicle or a motorcycle, the driver must obtain a driver’s license.
                            <br>The Road Traffic Act prohibits both those who have not obtained a driver's license and those who have a 
                            <span id="dots7">...</span><span id="more7" class="more">
                            suspended license from driving any motor vehicle (Article 43 of the Road Traffic Act).
                            </span>
                            <a onclick="showText('dots7','more7','myBtn7')" id="myBtn7" class="myBtn">Read More</a>
                        </p>
                        </blockquote>
                    </div>
                    <div id="$i" class="post-content">
                        <blockquote>
                        <h4>Penal provisions</h4>
                        <p>
                            Anyone who drives a motor vehicle without obtaining or having a driver’s license (except a motorcycle
                            license) or with a suspended license shall be punished by imprisonment of not more than 1 year or a fine of not 
                            <span id="dots15">...</span><span id="more15" class="more">
                            more than KRW 3,000,000 (Article 152(1) of the Road Traffic Act).
                            <br>Anyone who drives a motorcycle without a license shall be punished by a fine of not more than KRW 300,000 or 
                            penal detention (Article 154(2) of the Road Traffic Act).
                            <br>Any individual who has been sentenced to a punishment more severe than a fine due to a violation of the 
                            provisions concerning the prohibition of unlicensed driving or the prohibition of driving with a suspended 
                            license cannot reacquire a driver’s license until the following period has passed from the day of the violation
                            (or suspension in the case of a suspended license)(Article 82(2)1 of the Road Traffic Act).
                            </span>
                            <a onclick="showText('dots15','more15','myBtn15')" id="myBtn15" class="myBtn">Read More</a>
                        </p>
                        </blockquote>
                    </div>
                </div>
                
                <div id="employment" class="category-content">
                    <h2>Employment</h2>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Prohibition of unlicensed driving</h4>
                            <p>
                                Any foreigner who wishes to be employed in the Republic of Korea should obtain a status of 
                                sojourn that permits employment in the country. Employment of foreign workers is limited to such scope 
                                <span id="dots8">...</span><span id="more8" class="more">
                                as set forth for their visa category. Matters regarding employment of foreign workers holding 
                                Non-professional Employment (E-9) or Working Visit (H-2) visas, which permit employment in the Republic 
                                of Korea, are governed by the Act on Foreign Workers’ Employment, Etc. Foreign workers are also entitled
                                to the status of a worker. Therefore, their basic labor and social rights are guaranteed under social 
                                security laws. If they suffer a breach of their labor rights, those rights may be restored through 
                                applicable remedial procedures. Under the Act on Foreign Workers’ Employment, Etc., persons with Non-
                                professional Employment (E-9) or Working Visit (H-2) status are eligible for employment in the Republic 
                                of Korea for three years. In addition, persons in Non-professional Employment (E-9) visa category may be 
                                reemployed at least six months after their departure from the country. Foreign workers who entered the 
                                country with a visa eligible for employment must complete alien registration. They are allowed to engage 
                                in employment activities permitted under the status and period of their sojourn. If they have changed or
                                intend to change existing alien registration information, status, period, or place of sojourn, workplace, 
                                etc., they must file a report or obtain a permit according to the Immigration Control Act. In the event of
                                childbirth of foreign workers during their stay in the Republic of Korea, the nationality of their 
                                children is determined pursuant to the Nationality Act. They may file a birth report with the country 
                                under the Act on the Registration, Etc. of Family Relationship.
                                </span>
                                <a onclick="showText('dots8','more8','myBtn8')" id="myBtn8" class="myBtn">Read More</a>
                            </p>
                            </blockquote>
                        </div>
                </div>
                
                <div id="transportation" class="category-content">
                    <h2>Transportation</h2>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Using the Subways and Buses</h4>
                            <p>
                                What method of transportation do you use? The subway and bus are often the transit of choice 
                                of those who are thrifty and who are not afraid to pound some pavement.
                                <span id="dots9">...</span><span id="more9" class="more"><br>
                                The subway and buses are environmentally friendly, good for your health, and fast and convenient to boot. 
                                Their greatest advantage, however, may be in the savings they provide in transportation costs.
                                <br>
                                Though the subway and bus can save you quite a number of pennies in themselves, there are ways you can get
                                even sweeter savings out of this already sweet deal. Let us take a look.
                                <br>
                                Save on the Subway and Bus!
                                </span>
                                <a onclick="showText('dots9','more9','myBtn9')" id="myBtn9" class="myBtn">Read More</a>    
                            </p>
                            </blockquote>
                        </div>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Using the Subways Commuter’s Pass</h4>
                            <p>
                                The first way to be able to save up on your subway fare is by using a commuter’s pass.
                                <br>
                                A commuter’s pass is a subway pass that you can use a set number of times in a given time period, and costs
                                <span id="dots10">...</span><span id="more10" class="more">
                                less than the same number of rides using a regular ticket. You might think of it as a reward for regulars in
                                the form of lower rates. For someone who uses the subway every day, the hassle of getting this pass is worth
                                it for the discount.
                                </span>
                                <a onclick="showText('dots10','more10','myBtn10')" id="myBtn10" class="myBtn">Read More</a>   
                            </p>
                            </blockquote>
                        </div>
                </div>
                
                <div id="leisure" class="category-content">
                    <h2>Leisure</h2>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <p>
                                Generally, a consumer pays value added tax, individual consumption tax, etc. when he or she
                                purchases a product. However, when a consumer buys a product in a duty free shop, which is a bonded area
                                <span id="dots11">...</span><span id="more11" class="more">
                                selling foreign goods without customs clearance for the promotion of tourism, acquisition of foreign currencies,
                                and facilitation of shopping for consumers, the consumer is exempt from the payment of taxes if the value 
                                or quantity of goods does not exceed an allowed limit.
                                </span>
                                <a onclick="showText('dots11','more11','myBtn11')" id="myBtn11" class="myBtn">Read More</a>   
                            </p>
                            </blockquote>
                        </div>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Authorized duty free shop (Bonded store)</h4>
                            <p>
                                Authorized duty free shops (bonded stores) ("Duty Free Shop") sell goods under the condition that
                                goods sold therein are shipped overseas or used by a person eligible for duty exemption (「Customs Act」 Article 196 (1)).
                            </p>
                            </blockquote>
                        </div>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Designated duty free shop</h4>
                            <p>
                                Designated duty free shops indicate duty free shops for travelers to Jeju Special Self-governing 
                                Province (「Special Act of the Establishment of Jeju Special Self-governing Province and the Development of Free
                                International City」 Article 177 (1)).
                            </p>
                            </blockquote>
                        </div>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Basic Refund, cancellation, exchange and customer support at on-board airplane duty free shops</h4>
                            <p>
                                When purchased goods are not delivered or the order is canceled, a refund is provided. Depending on 
                                payment options, a payment on a credit card is canceled or a payment for the goods is deposited into a bank account
                                <span id="dots12">...</span><span id="more12" class="more">
                                on which the payment has been made.
                                <br>
                                If a boarding schedule is changed, flight information for the order can be modified before boarding. However, the
                                modification is not possible after hours to purchase and the purchase should be canceled.
                                <br>
                                Basically, an exchange or a refund of goods purchased at on-board airplane duty free shops is not possible after
                                the delivery.
                                <br>
                                However, in case where a delivered item is different from the order or information provided, or the item is damaged
                                , ruined, or contaminated, an exchange or a refund is possible.
                                <br>
                                For customer support for goods purchased at on-board airplane duty free shops, the goods can be sent to a relevant 
                                company by parcel delivery service and a purchaser can use customer support after contacting customer centers of airlines.
                                </span>
                                <a onclick="showText('dots12','more12','myBtn12')" id="myBtn12" class="myBtn">Read More</a>   
                            </p>
                            </blockquote>
                        </div>
                </div>
                
                <div id="changeofstatus" class="category-content">
                    <h2>Change of Status of Change</h2>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Foreigner stay</h4>
                            <p>
                                (1) Foreigner stay is categorized as follows<br>
                                -Short-term stay: Limited, up to 90 days of stay<br>
                                <span id="dots13">...</span><span id="more13" class="more">
                                -Long-term stay: Limited, more than 91 days of stay<br>
                                -Permanent Residency: Unlimited period of stay <br>
                                (2) Long-term stay and Permanent residency must register as a foreigner or file Domestic Residency Report 
                                within 90 days of arrival. <br>
                                </span>
                                <a onclick="showText('dots13','more13','myBtn13')" id="myBtn13" class="myBtn">Read More</a> 
                            </p>
                            </blockquote>
                        </div>
                        <div id="$i" class="post-content">
                            <blockquote>
                            <h4>Scope of activities and employment for foreigners staying in Korea</h4>
                            <p>
                                Foreigners are granted rights to any activities granted by their visa, and may stay as long as their
                                given period of stay. They are not, however, allowed to participate in any political activities except when
                                <span id="dots14">...</span><span id="more14" class="more">
                                specifically allowed by law. <br>
                                Foreigners seeking employment during their stay in Korea must have a visa that allows it, and may only work
                                in workplaces designated by local or district Immigration Office. <br>
                                If they wish to change their workplace, permission must be received from the local Immigration Office prior
                                to the change. <br>
                                
                                Visa statuses that allow employment are as follows. <br>
                                <strong>Short term employment (C-4), Professorship (E-1), Foreign Language Instructor (E-2), Research (E-3)
                                , Technology Transfer (E-4), Professional Employment (E-5), Arts & Performances (E-6), Special Occupations 
                                (E-7), Seasonal Employment (E-8), Non-professional Employment (E-9), Vessel Crew (E-10), Residency (F-2), 
                                Overseas Koreans (F-4), Permanent Residency (F-5), Working Holiday (H-1) </strong>
                                <br>
                                It is unlawful to hire, recommend, or arrange for hiring of foreigners who don't have appropriate visa 
                                status, and doing so is punishable offence under the Immigration Act 
                                </span>
                                <a onclick="showText('dots14','more14','myBtn14')" id="myBtn14" class="myBtn">Read More</a> 
                            </p>
                            </blockquote>
                        </div>
                </div>
            </main>
        </div>
        <aside id="secondary">
            <aside id="search-2" class="widget widget_search">
                <form class="search-form" action="" method="get">
                    <input type="search" name="s" class="search-field" placeholder="Search!" autocomplete="off">
                    <button type="submit" class="search-submit"><i class="search-icon"></i></button>
                </form>
            </aside>	
        </aside>
    </div>
    <br>
</div>
@endsection
@section('foot')
@endsection