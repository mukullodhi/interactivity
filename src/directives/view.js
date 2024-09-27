/**
 * WordPress dependencies
 */
import { store, getContext } from '@wordpress/interactivity';

const { state } = store('create-block', {
	actions: {
		toggle: () => {
			const context = getContext();
			context.isClosed = !context.isClosed;
		},
		highlight: () => {
			const context = getContext();
			context.isHighlighted = !context.isHighlighted;
		},
		updateCounter: () => {
			state.counter++
		}
	}
});
