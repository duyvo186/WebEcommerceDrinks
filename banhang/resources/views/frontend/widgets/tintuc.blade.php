<div class="content-wrapper">

    <div class="news-card">
      <a href="#" class="news-card__card-link"></a>
      <img src="https://images.pexels.com/photos/127513/pexels-photo-127513.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
      <div class="news-card__text-wrapper">
        <h2 class="news-card__title">Amazing First Title</h2>
        <div class="news-card__post-date">Jan 29, 2018</div>
        <div class="news-card__details-wrapper">
          <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia iure architecto deserunt distinctio, pariatur&hellip;</p>
          <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>

    <div class="news-card">
      <a href="#" class="news-card__card-link"></a>
      <img src="https://images.pexels.com/photos/631954/pexels-photo-631954.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
      <div class="news-card__text-wrapper">
        <h2 class="news-card__title">Amazing Second Title that is Quite Long</h2>
        <div class="news-card__post-date">Jan 29, 2018</div>
        <div class="news-card__details-wrapper">
          <p class="news-card__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ex natus nulla rem sequi laborum quod fugit&hellip;</p>
          <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>

    <div class="news-card">
      <a href="#" class="news-card__card-link"></a>
      <img src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="news-card__image">
      <div class="news-card__text-wrapper">
        <h2 class="news-card__title">Amazing Title</h2>
        <div class="news-card__post-date">Jan 29, 2018</div>
        <div class="news-card__details-wrapper">
          <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae&hellip;</p>
          <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>

    <div class="news-card">
      <a href="#" class="news-card__card-link"></a>
      <img src="https://images.pexels.com/photos/248486/pexels-photo-248486.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
      <div class="news-card__text-wrapper">
        <h2 class="news-card__title">Amazing Forth Title that is Quite Long</h2>
        <div class="news-card__post-date">Jan 29, 2018</div>
        <div class="news-card__details-wrapper">
          <p class="news-card__excerpt">Lorem ipsum dolor sit amet!</p>
          <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>

    <div class="news-card">
      <a href="#" class="news-card__card-link"></a>
      <img src="https://images.pexels.com/photos/206660/pexels-photo-206660.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
      <div class="news-card__text-wrapper">
        <h2 class="news-card__title">Amazing Fifth Title</h2>
        <div class="news-card__post-date">Jan 29, 2018</div>
        <div class="news-card__details-wrapper">
          <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia iure architecto deserunt distinctio&hellip;</p>
          <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>

    <div class="news-card">
      <a href="#" class="news-card__card-link"></a>
      <img src="https://images.pexels.com/photos/210243/pexels-photo-210243.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
      <div class="news-card__text-wrapper">
        <h2 class="news-card__title">Amazing 6<sup>th</sup> Title</h2>
        <div class="news-card__post-date">Jan 29, 2018</div>
        <div class="news-card__details-wrapper">
          <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur nemo tempore repellat? Ullam sed officia.</p>
          <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>

  </div>
<style>
    @use postcss-mixins;
@use postcss-nested;
@use postcss-simple-vars;

@define-mixin atMedium {
  @media (min-width: 600px) {
    @mixin-content;
  }
}
@define-mixin atLarge {
  @media (min-width: 900px) {
    @mixin-content;
  }
}

$card-height-large-screen: 20rem;
$card-height-mobile: 12rem;

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Open Sans";
}

body {
  background-color: #555;
}

.content-wrapper {
  margin: 0 auto;
  max-width: 1200px;
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  padding: 0.5rem;
}

.news-card {
  border: 0px solid aqua;
  margin: 0.5rem;
  position: relative;
  height: $card-height-mobile;
  @mixin atLarge {
    height: $card-height-large-screen;
  }
  overflow: hidden;
  border-radius: 0.5rem;
  flex: 1;
  min-width: 290px;
  box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  &::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.7) 80%);;
      z-index: 0;
    }

  &__card-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
/*     background: rgba(255,0,0,.5); */
  }

  &__image {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform 3s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    position: relative;
    z-index: -1;
  }
  &__text-wrapper {
    position: absolute;
    bottom: 0rem;
    padding: 1rem;
    color: white;
/*     background-color: rgba(0, 0, 0, 0.4); */
    transition: background-color 1.5s ease;
  }
  &__title {
    transition: color 1s ease;
    margin-bottom: .5rem;
  }
  &__post-date {
    font-size: .7rem;
    margin-bottom: .5rem;
    color: #CCC;
  }
  &__details-wrapper {
    max-height: 0;
    opacity: 0;
    transition: max-height 1.5s ease, opacity 1s ease;
  }
  @mixin atLarge {
    &:hover &__details-wrapper {
      max-height: $card-height-large-screen;
      opacity: 1;
    }
    &:hover &__text-wrapper {
      background-color: rgba(0, 0, 0, 0.6);
    }
    &:hover &__title {
      color: yellow;
    }
    &:hover &__image {
      transform: scale(1.2);
      z-index: -1;
    }
  }
  &__excerpt {
    font-weight: 300;
  }
  &__read-more {
    background: black;
    color: #bbb;
    display: block;
    padding: 0.4rem 0.6rem;
    border-radius: 0.3rem;
    margin-top: 1rem;
    border: 1px solid #444;
    font-size: 0.8rem;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    text-decoration: none;
    width: 7rem;
    margin-left: auto;
    position: relative;
    z-index: 5;
    i {
      position: relative;
      left: 0.2rem;
      color: #888;
      transition: left 0.5s ease, color 0.6s ease;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }
    &:hover i {
      left: 0.5rem;
      color: yellow;
    }
  }
}

    </style>
