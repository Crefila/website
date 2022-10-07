import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
	const year =  new Date().getFullYear();
	return (
		<footer { ...useBlockProps.save() }>
			<div class="w-full flex bg-sky-900 p-8 text-neutral-200 border-t-2 border-t-gray-400 justify-center">
				<div class="md:w-70%">
					@ CREFILA UG PROPERTY, 2022
				</div>
			</div>
		</footer>
	);
}
