import HttpClientBase from './HttpClientBase.js';

export class HttpClinics extends HttpClientBase {
    constructor() {
        super(`http://localhost/nutrium/api/clinics`);
    }

    async listByIdClinic(clinicId) {
        return this.get('/listclbyid/:clinicId', {clinicId: clinicId});
    }
    async listClinics() {
        return this.get('/listclinics');
    }
    async createClinic(data) {
        return this.post('/createclinic', data);
    }
    async updateClinic(clinicId) {
        return this.put('/updateclinic/clinicId', { clinicId: clinicId });
    }
    async deleteClinic(clinicId) {
        return this.delete(`/removeclinic/${clinicId}`);
    }


    
// async getServicesByName(serviceName) {
    //     //console.log()
    //     return this.get(`/list-by-name/name/:name`,serviceName);
    // }

    // async getServicesByCategory(category_id) {
    //     return this.get('/list-by-category/category/:id', {id: category_id});
    // }
    /*

    async deleteService(serviceId) {
        return this.delete(`/services/${serviceId}`);
    }

    // Exemplo com FormData
    async uploadServiceImage(serviceId, imageFile) {
        const formData = new FormData();
        formData.append('image', imageFile);
        return this.post(`/services/${serviceId}/image`, formData);
    }*/
}