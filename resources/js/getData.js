import axios from "axios";

const getDataLowongan = (id) => {
    return axios
        .get(`/api/lowongan/show/${id}`)
        .then((res) => {
            return res.data;
        })
        .catch((err) => {
            console.log(err);
        });
};

const getDataPelatihan = (id) => {
    return axios
        .get(`/api/pelatihan/show/${id}`)
        .then((res) => {
            return res.data;
        })
        .catch((err) => {
            console.log(err);
        });
};

export { getDataLowongan, getDataPelatihan };
