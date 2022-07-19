import { getDataLowongan, getDataPelatihan } from "../../getData";

const card_pelatihan = document.getElementById("card-pelatihan");

const cardPelatihan = (nm_pelatihan, jenis_pelatihan, penyelengara, poster) => {
    const the_card = `<div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Detail Pelatihan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama Pelatihan</td>
                                <td>:</td>
                                <td>${nm_pelatihan}</td>
                            </tr>
                            <tr>
                                <td>Jenis Pelatihan</td>
                                <td>:</td>
                                <td>${jenis_pelatihan}</td>
                            </tr>
                            <tr>
                                <td>Penyelengara</td>
                                <td>:</td>
                                <td>${penyelengara}</td>
                            </tr>
                            <tr>
                                <td>Poster</td>
                                <td>:</td>
                                <td>
                                    <div class="col-lg-3 col-md-4 col-xs-6">
                                        <a class="image-popup-vertical-fit" href="/storage/pelatihan/${poster}" title="foto Lowongan">
                                            <img src="/storage/pelatihan/${poster}" class="img-fluid" alt=""  />
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger text-start" data-bs-dismiss="modal">Close</button>
            </div>
        </div>`;
    card_pelatihan.innerHTML = the_card;
};

// document click event
if (card_pelatihan) {
    document.addEventListener("click", function (event) {
        if (event.target.matches(".card-show")) {
            card_pelatihan.innerHTML = "";
            const id = event.target.dataset.id;
            getDataPelatihan(id).then((res) => {
                console.log(res);
                console.log("card-show");
                cardPelatihan(
                    res.nm_pelatihan,
                    res.jenis_pelatihan,
                    res.penyelengara,
                    res.poster
                );
            });
        }
    });
}
