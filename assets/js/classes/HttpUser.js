import HttpClientBase from './HttpClientBase.js';

export class HttpUser extends HttpClientBase {
    constructor() {
        super(`http://localhost/nutrium/api/users`);
    }

    async listUserById(id) {
        return this.get('/listuserid/:id', { id: id });
    }
    async listUsers() {
        return this.get('/list');
    }
    async createUser(data) {
        return this.post('/create', data);
    }
    async updateUser(id) {
        return this.post('/update/:id', { id: id });
    }
    async deleteUser(id) {
        return this.delete(`/deleteuser/${id}`);
    }
    async getUser() {
        return this.get('/me');
    }

    async loginUser() {
        return this.get('/login');
    }
    async updatePhoto() {
        return this.get('/pfp');
    }
}


