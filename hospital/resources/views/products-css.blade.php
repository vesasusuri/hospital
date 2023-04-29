<style>
.partnership-items{
    margin:max(50px, 5%) 0 0;
    padding: 0 9%;
    }
    .partnership-items .row .info h5{
        color: gray;
        font-size: max(15px, 0.9vw);
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 2px;
    }
    .partnership-items .row{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: max(55px, 6vw);
    }
    .info{
        width: 50%;
    }
    .img-container{
        width: 41%;
        background: #E2D6F5;
        padding:max(10px, 1vw);
        overflow: hidden;
        transition: 0.35s ease-in-out;
        -webkit-transition: 0.35s ease-in-out;
        clip-path: polygon(11% 0, 100% 1%, 100% 85%, 89% 100%, 0 100%, 0 15%);
        &:hover{
            clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 0 100%, 0 0);
            .img{
                clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 0 100%, 0 0);
            }
            .bg{ display: block; }
        }
    }
    .img{
        width: 100%;
        clip-path: polygon(11% 0, 100% 1%, 100% 85%, 89% 100%, 0 100%, 0 15%);
        transition: 0.35s ease-in-out;
        -webkit-transition: 0.35s ease-in-out;
    }
    .bg{
        display: none;
        border-radius: 15px;
        position: absolute;
        width: 200%;
        height: 200%;
        top: -50%;
        left: -50%;        
        animation: borderAnimation 1s infinite linear;
        -webkit-animation: borderAnimation 1s infinite linear;
        background: rgba(0, 0, 0, 0);
        background: linear-gradient(
        to right, 
        rgba(0, 0, 0, 0) calc(50% - 150px / 2),
        #ffffff 50%,
        rgba(0, 0, 0, 0) calc(50% + 150px / 2));
    }
    .partnership-items .row .info h2{
        font-size:20px;
        font-weight: 500;
        margin:max(10px, 1vw) 0 max(10px, 1vw);
    }

    .partnership-items .row .info .info2{
        display:flex;
        justify-content:space-evenly;
        width:50%;
    }
    .partnership-items .row .info p{
        color:#363636;
        font-size: max(14px, 0.9vw);
        line-height: 1.7;
        margin-bottom: max(18px, 1vw);
    }
   
    
@media(max-width:1200px){
    .partnership-items{
        padding: 0 5%;
    }
    .partnership-items  .info{ width: 42.5%; }.info2{ width: 42.5%; }
    .partnership-items .img-container{ width: 47.5%; }
}
@media(max-width:767px){
    .partnership-items .row{ margin-bottom: 35px; }
    .partnership-items  .info{
            width: 100%;
            text-align: center;
            margin:20px auto;
        }
        .partnership-items  .info2{
            width: 100%;
            text-align: center;
            margin:20px auto;
        } 
        .partnership-items    .img-container{
            width: 400px;
            max-width: 100%;
            margin:20px auto;
        }
        .partnership-items   .logo{  margin:0 auto; }
    
}

@keyframes borderAnimation {
    from {
      transform: rotate(0deg);
    }
    
    to {
      transform: rotate(180deg);
    }
}
@-webkit-keyframes borderAnimation {
    from {
      transform: rotate(0deg);
    }
    
    to {
      transform: rotate(180deg);
    }
}

</style>