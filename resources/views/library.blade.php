@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Roulette">
                <div class="header-btn " >
                    <h2>Roulette</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/roulette-imgbtn.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Roulette" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Roulette</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae iure sunt deleniti sapiente inventore, earum veritatis eaque, enim sequi laudantium tempora obcaecati assumenda? Ipsa facilis quo optio. Deleniti possimus aspernatur sed in et inventore laboriosam ea consequatur perspiciatis optio, neque dicta quibusdam ipsa tempora quaerat, voluptates ipsum quidem quo excepturi repellat rem aut voluptatibus. Magni, vero delectus eligendi non quaerat accusamus debitis veritatis eius amet. Deserunt, rem alias nulla recusandae eum laudantium quas eaque nostrum repellendus accusantium in voluptate at voluptatem incidunt itaque dolor similique, voluptatum doloremque velit nisi architecto, aliquid maxime? Minus saepe voluptate doloremque deleniti tempora, beatae reiciendis!
                    </div>
                  </div>
                </div>
              </div>
        </div>


        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Blackjack">
                <div class="header-btn" >
                    <h2>Blackjack</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/blackjack-imgbtn.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Blackjack" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Blackjack</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas inventore recusandae nam. Voluptate enim corrupti quaerat. Dolore in nisi a suscipit tempora neque. Vel tempore recusandae sunt minus, rem eius? Ut praesentium nostrum reiciendis non adipisci, porro tempora sint dicta numquam iusto saepe cupiditate ipsum officia laboriosam nesciunt aliquam cumque atque consectetur labore vel quibusdam? Maiores illo, reprehenderit obcaecati nisi dolor ipsum facere eos, earum dolores omnis neque. Illo corrupti repellat omnis soluta nam pariatur veniam exercitationem blanditiis excepturi ut est esse provident magnam recusandae itaque commodi mollitia, tempora ea tempore. Recusandae repellat facere aliquam veritatis sint quaerat nemo architecto.
                    </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Poker">
                <div class="header-btn" >
                    <h2>Poker</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/poker-imgbtn.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Poker" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Poker</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam deleniti et, at hic facere tempore earum excepturi nesciunt modi esse asperiores dolores sint, non ipsam consequatur, illum repudiandae ab. Voluptates, aut. Nam nihil a placeat impedit illum facilis tenetur rerum cupiditate provident inventore, nisi excepturi recusandae eveniet neque quod pariatur ducimus est alias suscipit minima aperiam. Dicta doloribus at praesentium enim exercitationem dolor eum architecto soluta sapiente provident quisquam, aliquid incidunt quibusdam et adipisci optio ipsum, quas perferendis fuga veniam rerum quos perspiciatis? Dignissimos porro neque perspiciatis recusandae cupiditate mollitia facere inventore, earum ipsa incidunt officiis itaque illo, asperiores voluptate.
                    </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Slotmachine">
                <div class="header-btn" >
                    <h2>Slotmachine</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/slotmachine-imgbtn.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Slotmachine" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Slotmachine</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil cupiditate error laboriosam deleniti, consectetur porro exercitationem dolore doloribus aut, magni animi nesciunt debitis distinctio iusto necessitatibus dolorum voluptates cumque quod voluptatem unde, repellat in! Ab labore fugit ipsam, dolore sit accusamus aperiam quasi maiores veritatis molestiae at dolorum libero quidem expedita voluptatum facere vitae assumenda laboriosam delectus non quos illum harum provident natus! Fuga nulla nam natus eveniet esse non nihil nesciunt commodi officia excepturi voluptatum eos dolorum quisquam, aspernatur tempore, velit rem temporibus quo possimus. Odio dolorum enim aut quia excepturi reiciendis, odit error praesentium numquam distinctio consequuntur. Itaque?
                    </div>
                  </div>
                </div>
              </div>
        </div>


        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <button type="button" class="btn btn-library" data-toggle="modal" data-target="#Paardenrace">
                <div class="header-btn" >
                    <h2>Paardenrace</h2>
                </div>
                <div class="bgimg-btn">
                    <img src="{{ asset('img/games/Horserace-btnimg.png') }}" alt="">
                </div>
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="Paardenrace" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header card-groen">
                      <h5 class="modal-title" id="exampleModalLongTitle">Paardenrace</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body card-registreer">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea facilis maiores inventore dolore, animi molestiae hic, ullam odit quisquam quae quod repellat aliquid odio sit deleniti quos eaque amet! Quod expedita ratione corrupti atque commodi, architecto recusandae non temporibus eius accusamus laboriosam nemo velit tenetur quas vitae sapiente sint, numquam quibusdam! Tenetur rerum provident labore deserunt officia, explicabo harum ad natus numquam aut dolore ratione possimus commodi sed enim iste nemo et sunt. Asperiores earum ad tempore dolor quo suscipit aspernatur, nam delectus est pariatur dolore alias eius fugit consequatur nesciunt qui! Perspiciatis eos, quia porro cumque maxime repellat necessitatibus?
                    </div>
                  </div>
                </div>
              </div>
        </div>

    </div>
</div>
@endsection