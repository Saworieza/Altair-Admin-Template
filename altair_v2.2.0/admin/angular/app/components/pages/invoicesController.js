angular
    .module('altairApp')
    .controller('invoicesCtrl', [
        '$scope',
        '$rootScope',
        'utils',
        'invoices_data',
        '$stateParams',
        function ($scope,$rootScope,utils,invoices_data,$stateParams) {

            $rootScope.page_full_height = true;
            $rootScope.headerDoubleHeightActive = true;

            $scope.invoices_data = invoices_data;

            $scope.getMonth = function(invoice,$index) {
                var prev_date = $scope.invoices_data[$index-1],
                    this_date = invoice.date;
                if(prev_date) {
                    return moment(new Date(this_date)).format('MM') !== moment(new Date(prev_date.date)).format('MM')
                } else if($index == 0) {
                    return true;
                }
            };

        // invoice details
            $scope.invoice = utils.findByItemId($scope.invoices_data, $stateParams.invoiceId);

            if($scope.invoice) {

                $scope.invoice_dueDate = moment( new Date($scope.invoice.date) ).add($scope.invoice.due_date,'days').format('MM.DD.YYYY');

                // calculate total value
                $scope.invoice_total = function() {
                    var services = $scope.invoice.services,
                        services_length = services.length,
                        total_value = 0;
                    for($i=0;$i<services_length;$i++) {
                        var service_rate = services[$i].rate,
                            service_hours = services[$i].hours,
                            service_tax = services[$i].tax;

                        total_value += (service_rate * service_hours) + ((service_tax/100) * (service_rate * service_hours))
                    }
                    return total_value;
                };

                // calculate total tax
                $scope.invoice_total_tax = function() {
                    var services = $scope.invoice.services,
                        services_length = services.length,
                        total_tax = 0;
                    for($i=0;$i<services_length;$i++) {
                        var service_rate = services[$i].rate,
                            service_hours = services[$i].hours,
                            service_tax = services[$i].tax;

                        total_tax += ( (service_tax/100) * (service_rate * service_hours) )
                    }
                    return total_tax;
                };

            }

        // new invoice
            $scope.invoiceData = {
                services: [
                    {
                        id: 1,
                        service_total: 0
                    }
                ]
            };

            // add new services
            $scope.addService = function($event) {
                $event.preventDefault();
                var newItemNo = $scope.invoiceData.services.length + 1;
                $scope.invoiceData.services.push({
                    'id': newItemNo,
                    'service_total': 0
                });
            };

            // calculate total value
            $scope.setTotal = function(service){
                if(service.service_rate && service.service_hours && service.service_tax) {
                    return service.service_total = ( (service.service_rate * service.service_hours) + ((service.service_tax/100) * (service.service_rate * service.service_hours)) ).toFixed(2)
                }
            };

            $('#invoice_submit').on('click',function(e) {
                e.preventDefault();
                var data = JSON.stringify($scope.invoiceData, null, 2);
                UIkit.modal.alert('<p>Invoice data:</p><pre>' + data + '</pre>');
            })

        }
    ]);