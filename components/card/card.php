<div class="card">

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
			<defs>
			<marker
				id="arrow"
				orient="auto"
				viewBox="0 0 10 10"
				markerWidth="3"
				markerHeight="4"
				markerUnits="strokeWidth"
				refX="1" refY="5">
			<polyline points="0,0 10,5 0,10 1,5" fill="black" />
			</marker>
			</defs>

			<path
				id="line"
				marker-end="url(#arrow)"
				stroke-width="3"
				fill="none"
				stroke="black">

			<animate
					dur="2s"
					repeatCount="indefinite"
					attributeName="d"
					values="M7,121 C7,121 7,121 7,121; M7,121 C66,4 143,75 147,125" />

			</path>

		</svg>

	<?= $data->content; ?>

</div>
