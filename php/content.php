<?php
include "db.php";

$jobs = get_jobs();
foreach ($jobs as $job) : ?>

	<div class="card m-2 border border-danger">
		<img src=<?php echo "img/job/$job[job_image]" ?> class="card-img-left" alt="">
		<div class="card-body">
			<h5 class="card-title"><?php echo $job['title'] ?></h5>
			<div class="dropdown ">
				<button type="button" class="btn border border-danger text-danger dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
					<?php $salary = get_monthly_salary($job);
					echo $salary[" PLN "]; ?>
				</button>
				<ul class="dropdown-menu text-danger border border-danger">
					<li class="dropdown-item text-danger fw-bold"><?php echo $salary[" USD ≈ "] ?></li>
					<li class="dropdown-item text-danger fw-bold"><?php echo $salary[" BLR ≈ "] ?></li>
					<li class="dropdown-item text-danger fw-bold"><?php echo $salary[" RUB ≈ "] ?></li>
					<li class="dropdown-item text-danger fw-bold"><?php echo $salary[" UAH ≈ "] ?></li>
				</ul>
			</div>
			<ul class="list-group list-group-flush p-2">
				<li class='list-group-item'>
					<object type="image/svg+xml" data='img/icons/geo-alt.svg'></object> -
					<a class="text-danger" target="_blank" href=https://www.google.ru/maps/place/<?php echo $job['city'] ?>>
						<?php echo $job['city'] ?>
					</a>
				</li>
				<li class='list-group-item'>
					<object type="image/svg+xml" data='img/icons/calendar2-week.svg'></object>
					- <?php echo get_work_time($job) ?>
				</li>
				<li class='list-group-item'>
					<object type="image/svg+xml" data='img/icons/cash-stack.svg'></object>
					- <?php echo get_hoverly_pay($job) ?>
				</li>
				<li class='list-group-item'>
					<object type="image/svg+xml" data='img/icons/house-fill.svg'></object>
					- <?php echo get_price_home($job) ?>
				</li>
				<li class='list-group-item'></li>
			</ul>
			<p class="card-text">
				<?php echo mb_substr($job['job_des'], 0, 150) . " ..." ?>
			</p>
			<div class="d-grid gap-2">
				<button type="button" class="btn btn-danger btn-primary" data-bs-toggle="modal" data-bs-target=<?php echo "#card_id_" . $job['id'] ?>>
					Посмотреть вакансию
				</button>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id=<?php echo "card_id_" . $job['id'] ?> tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo $job['title'] ?></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<?php echo $job['job_des'] ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>