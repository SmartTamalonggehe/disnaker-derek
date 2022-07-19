import { getDataLowongan } from "../../getData";

const card_lowongan = document.getElementById("card-lowongan");

const cardLowongan = (
    nm_perusahaan,
    umur_minimal,
    umur_maksimal,
    pend_terakhir,
    kehalian,
    keterangan,
    poster
) => {
    const the_card = `<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Detail Loker</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama Perusahaan</td>
                        <td>:</td>
                        <td>${nm_perusahaan}</td>
                    </tr>
                    <tr>
                        <td>Umur Minimal</td>
                        <td>:</td>
                        <td>${umur_minimal}</td>
                    </tr>
                    <tr>
                        <td>Umur Maksimal</td>
                        <td>:</td>
                        <td>${umur_maksimal}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>:</td>
                        <td>${pend_terakhir}</td>
                    </tr>
                    <tr>
                        <td>Keahlian Dibutuhkan</td>
                        <td>:</td>
                        <td>${kehalian}</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td>${keterangan}</td>
                    </tr>
                    <tr>
                        <td>Poster</td>
                        <td>:</td>
                        <td>
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <a class="image-popup-vertical-fit"
                                    href="/storage/loker/poster/${poster}"
                                    title="foto Lowongan">
                                    <img src="/storage/loker/poster/${poster}"
                                        class="img-fluid" alt="" />
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
    card_lowongan.innerHTML = the_card;
};

// document click event
document.addEventListener("click", function (event) {
    if (event.target.matches(".card-show")) {
        const id = event.target.dataset.id;
        card_lowongan.innerHTML = "";
        getDataLowongan(id).then((res) => {
            console.log(res);
            console.log("card-show");
            cardLowongan(
                res.nm_perusahaan,
                res.umur_minimal,
                res.umur_maksimal,
                res.pend_terakhir,
                res.kehalian,
                res.keterangan,
                res.poster
            );
        });
    }
});
