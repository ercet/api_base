<?php
/**
 * @apiDefine       ErrorResponses
 * @apiErrorExample Invalid Input Response:
 *     HTTP/1.1 400 Bad Request
 *     {
 *          "success": false,
 *          "data": null,
 *          "errors": [
 *              "field1": ["The field1 is required."],
 *              "field2": ["The field2 must be true or false."]
 *          ]
 *     }
 * @apiErrorExample Forbidden Response:
 *     HTTP/1.1 403 Forbidden
 *     {}
 * @apiErrorExample Resource Not Found Response:
 *     HTTP/1.1 422 Unprocessable Entity
 *     {}
 * @apiErrorExample Exception Response:
 *     HTTP/1.1 500 Internal Server Error
 *     {
 *          "success": false,
 *          "data": null,
 *          "errors": [
 *              "message": "Some error message"
 *          ]
 *     }
 */
